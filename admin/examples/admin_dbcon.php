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
        

        // function Update($email)
        // {
        //     $sql1 = "UPDATE tbl_user SET `email_approved`='1' WHERE `email`=$email;";
        //     $z=$this->con->query($sql1);
        //     return $z;
        // }
    } 


    class Product extends dbcon
    {
        public $id;
        public $prod_name;
        public $prod_parent_id;
        public $prod_available;
        public $prod_launch_date;
        function InsertProductCategory($pc)
        {
            $sql2 = "INSERT INTO `tbl_product`(`id`,`prod_parent_id`,`prod_name`,`prod_available`, `prod_launch_date`) VALUES (NULL,'1','$pc','1',Now());";
            $y1=$this->con->query($sql2);
            return $y1;
        }
        // function InsertByProductCategory($pc,$pn)
        // {
        //     $sql2 = "INSERT INTO `tbl_product`(`id`,`prod_parent_id`,`prod_name`,`prod_available`, `prod_launch_date`) VALUES (NULL,$pc,'$pn','1',Now());";
        //     $y1=$this->con->query($sql2);
        //     return $y1;
        // }

        function SelectProductCategory()
        {
            $sql1 = "SELECT * from tbl_product;";
            $result = $this->con->query($sql1);
            if($result->num_rows>0)
            {

                $arr = array();
                while($row = $result->fetch_assoc())
                {
                    $arr[]=array(
                        "id"=>$row['id'],
                        "prod_parent_id"=>$row['prod_parent_id'],
                        "prod_name"=>$row['prod_name'],
                        "prod_available"=>$row['prod_available'],
                        "prod_launch_date"=>$row['prod_launch_date'],
                    );

                }
                return $arr;

            }
            
        }

        function UpdateProductCategory($pn,$id)
        {
            $sql1 = "UPDATE `tbl_product` SET  `prod_name` = '{$pn}' where `id`= '{$id}'";
            $result = $this->con->query($sql1);
            return $result;
        }

        function DeleteProductCategory($id)
        {
            $sql2 = "DELETE from `tbl_product` WHERE `id`= '{$id}' and `prod_parent_id` != '{$id}'";
            $result1 = $this->con->query($sql2);
            return $result1;
        }


        function SelectProductCategory1()
        {
            $sql1 = "SELECT * from tbl_product WHERE `prod_parent_id` ='1' ;";
            $result = $this->con->query($sql1);
            if($result->num_rows>0)
            {

                $arr = array();
                while($row = $result->fetch_assoc())
                {
                    $arr[]=array(
                        "id"=>$row['id'],
                        "prod_parent_id"=>$row['prod_parent_id'],
                        "prod_name"=>$row['prod_name'],
                        "prod_available"=>$row['prod_available'],
                        "prod_launch_date"=>$row['prod_launch_date']


                    );

                    
                }
                return $arr;

            }
            
        }
       

    }

    class ProductDescript extends dbcon
    {
        function InsertProductdesc($pc,$pn,$description,$mp,$ap,$sku)
        {


            $sql3 = "INSERT INTO `tbl_product`(`id`,`prod_parent_id`,`prod_name`,`prod_available`, `prod_launch_date`) VALUES (NULL,$pc,'$pn','1',Now());";
            if($this->con->query($sql3))
           {
               $last_id = $this->con->insert_id;
               $sql2 = "INSERT INTO `tbl_product_description`(`id`, `prod_id`, `description`, `mon_price`, `annual_price`, `sku`)VALUES (NULL,'$last_id','$description','$mp','$ap','$sku');";
               $y1=$this->con->query($sql2);

           }
           return $y1;
    

        }

   
            function GetAllProductDetails()
            {
            
                $sql3=  "SELECT * FROM `tbl_product` as tp join `tbl_product_description` as tdp where tp.id = tdp.prod_id;";
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
                    $prod_parent_id=$row['prod_parent_id'];
                    $sql="SELECT * FROM `tbl_product` WHERE `id`='$prod_parent_id'";
                    $roww=$this->con->query($sql);
                    $data1=$roww->fetch_assoc();
                    $arr = array($data1['prod_name'],$row['prod_name'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox);
                }
                return $arr;  
            }


            
    
        }
    





  
    



 

?>