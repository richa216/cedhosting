<?php


   class dbcon
   {
       public $server;
       public $username;
       public $password;
       public $con;
       public $dbname;

       public function __construct()
       {
            $this->server = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname   = "CedHosting";
            $this->con = new mysqli($this->server,$this->username,$this->password,$this->dbname);
            if($this->con)
            {
            return $this->con;
            }
            else
            {
                return "error";
            }

       }
    }

    class user extends dbcon
    {
        function Insert($email,$name,$contact,$ea,$pa,$ac,$ia,$today,$password,$sq,$sa)
        {
             $sql="INSERT INTO tbl_user (`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES (NULL, '$email', '$name', '$contact', '$ea', '$pa', '$ac', '1', '$today', '$password', '$sq', '$sa');";
             $y=$this->con->query($sql);
             return $y;
        }

        function Select($email)
        {
            $sql1 = "SELECT `password` from tbl_user where `email` = '{$email}';";
            $m = $this->con->query($sql1);
            $n = $m->fetch_assoc();
            $row = $n['password'];
            return $row;
        }
        function SelectIsadmin($email)
        {
            $sql1 = "SELECT `is_admin` from tbl_user where `email` = '{$email}';";
            $m = $this->con->query($sql1);
            $n = $m->fetch_assoc();
            $row = $n['is_admin'];
            return $row;

        }
        function Selectques($email)
        {
            $sql1 = "SELECT `security_question`,`security_answer` from `tbl_user` where `email` = '{$email}';";
            $m = $this->con->query($sql1);
          
            $arr = array();
            while($row = $m->fetch_assoc())
            {
                $arr=array(
                    "security_question"=>$row['security_question'],
                    "security_answer"       =>$row['security_answer']
          
                );

            }
            return $arr;
        }

        function updatepasword($email,$pwd)
        {
            $sql1 = "UPDATE `tbl_user` SET  `password` = '{$pwd}' where `email` = '{$email}'";
            $result = $this->con->query($sql1);
            return $result;
        }
        
    } 

    class product extends dbcon
    {
        function selectproductname()
        {
            $sql="SELECT `prod_name`,`id` from `tbl_product` WHERE prod_parent_id=1 and id!=1;";
            $result = $this->con->query($sql);

            if($result->num_rows>0)
            {

                $arr = array();
                while($row = $result->fetch_assoc())
                {
                    $arr[]=array(
                        "prod_name"=>$row['prod_name'],
                        "id"       =>$row['id']
              
                    );

                }
                return $arr;

            }

        }


        function GetAllProductsDetail()
        {
            $sql3=  "SELECT `link` FROM `tbl_product` ";
            $data=$this->con->query($sql3);
            $row=$data->fetch_assoc();
            return $row;
        }


        function GetProductsDetail($id)
        {
            $sql3=  "SELECT `prod_name` FROM `tbl_product` WHERE `id`='{$id}';";
            $result=$this->con->query($sql3);
            $row=$result->fetch_assoc();
            return $row;
        }

        function GetProductDesc($id)
        {
            $sql3=  "SELECT * FROM `tbl_product` as tp join `tbl_product_description` as tdp where tp.prod_parent_id='{$id}' AND  tdp.prod_id = tp.prod_parent_id AND tp.prod_available='1';";
            $data=$this->con->query($sql3);
            
          
            $arr['data']=array();
               
            while ($row=$data->fetch_assoc())
            {
                if ($row['prod_available']=='1')
                {
                    $available="available";
                }
                else
                {
                        $available="unavailable";
                }
                $decoded_description=json_decode($row['description']);
                $webspace=$decoded_description->{'webspace'};
                $bandwidth=$decoded_description->{'bandwidth'};
                $freedomain=$decoded_description->{'freedomain'};
                $languagetechnology=$decoded_description->{'languagetechnology'};
                $mailbox=$decoded_description->{'mailbox'};
              
            
                $arr = array($row['prod_id'],$row['prod_name'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox);
            }
        
                return $arr;  
        }




        function GetProductDesc1($id)
        {
            $sql3=  "SELECT * FROM `tbl_product` as tp join `tbl_product_description` as tdp where tp.prod_parent_id='{$id}' AND  tdp.prod_id = tp.prod_parent_id AND tp.prod_available='1';";
          
            $data=$this->con->query($sql3);
            $x = mysqli_num_rows($data);
            return $x;  
        }
        // function RedirecHomePage($id)
        // {

        //         $sql3=  "SELECT `prod_id` FROM `tbl_product_description`  where prod_id!={$id};";
        //         $result=$this->con->query($sql3);
        //         $x=$result->fetch_assoc();
        //         return $x;
        // }


        function GetAllProductDetails1($id)
        {
        
            $sql3=  "SELECT * FROM `tbl_product` as tp join `tbl_product_description` as tdp where tp.prod_parent_id='{$id}' AND tp.prod_parent_id = tdp.prod_id ";
            $data=$this->con->query($sql3);
            $arr=array();
           
            

                while ($row=$data->fetch_assoc())
                {

                    
                    $arr[] = array($row['prod_available'],$row['prod_name'],$row['mon_price'],$row['annual_price'],$row['sku']);
                }
            

            return $arr;  
        }


    }




  
    



 

?>