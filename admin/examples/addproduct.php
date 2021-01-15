<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script> -->
 

</head>

<body>
<?php include 'header.php';?>
  <!-- Sidenav -->

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>

 
    <!-- Page content -->
            <form action="addproduct.php" method="post" 
              onsubmit="return(validateAddProduct());">
              <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Create New Product</h1>
                            <div class="mb-0">Enter Product Details </div>
                            <small class="important-field"> 
                            * Mandatory Fields</small>
                            </div>
                        </div>
                    </div>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="inputState">Select Product Category
                    <span class="important-field"> *</span></label>
                    <select id="productcategory" class="form-control" 
                    name="productcategory">
                        <option  disabled selected>--Product Category--</option>
                        <?php
                                        include 'admin_dbcon.php';
                                         $x = new product();
                                         $value = $x->SelectProductCategory1();
                                         foreach($value as $key=>$value)
                                         {
                                        
                                              
                                              echo "<option value='". $value['id'] ."'>" .$value['prod_name'] ."</option>"; 
                                              
                                          
                                          }
                        ?>   

                        
                    </select>
                    <div class="invalid-feedback">
                      Please Select a Product Category.
                    </div>
                    
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="productname">Enter Product Name
                        <span class="important-field"> *</span></label>
                        <input type="text" id="productname" 
                        class="form-control" placeholder="product Name" 
                        name="productname">
                          <div class="invalid-feedback">
                            Please provide a valid Product Name.
                          </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Product Description</h1>
                            <div class="mb-0">Enter Product Description Below </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="monthlyprice">Enter Monthly Price
                        <span class="important-field"> *</span></label>
                        <input type="text" id="monthlyprice" 
                        class="form-control" placeholder="Monthly Price" 
                        name="monthlyprice">
                        <small class="text-muted">This would be Monthly Plan</small>
                        <div class="invalid-feedback">
                          Please Enter valid Monthly price.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="annualprice">Enter Annual Price
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="annualprice" 
                        class="form-control" placeholder="Annual Price" 
                        name="annualprice">
                        <small class="text-muted">This would be Annual Price</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Annual Price.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="sku">SKU<span class="important-field"> *</span></label>
                        <input type="text" id="sku" class="form-control" 
                        placeholder="SKU" name="sku">
                        <div class="invalid-feedback">
                          Please Enter valid SKU.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h1 class="mb-0">Features</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="webspace">Web Space(in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="webspace" 
                        class="form-control" placeholder="Web Space" name="webspace">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Web Space.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="bandwidth">Bandwidth (in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="bandwidth" 
                        class="form-control" placeholder="Bandwidth" 
                        name="bandwidth">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter bandwidth.
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="freedomain">Free Domain<span 
                        class="important-field"> *</span> </label>
                        <input type="text" id="freedomain"
                         class="form-control" placeholder="Free Domain" 
                         name="freedomain">
                        <small class="text-muted">Enter 0 if 
                        no domain available in this service</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Free Domain.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="languagetechnology">Language/ Technology Support
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="languagetechnology" 
                        class="form-control" 
                        placeholder="Language or Technology Support" 
                        name="languagetechnology">
                        <small class="text-muted">Separate by (,) 
                        Ex: PHP, MySQL, MongoDB</small>
                        <div class="invalid-feedback">
                        Please Enter Valid Language or Technology Support.
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="mailbox">Mailbox
                        <span class="important-field"> *</span> </label>
                        <input type="text" id="mailbox" class="form-control" 
                        placeholder="Mailbox" name="mailbox">
                        <small class="text-muted">Enter Number 
                        of mailbox will be provided, enter 0 if none</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Number of Mailbox.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                  <input type="submit" class="btn btn-primary mt-4" 
                  id="createcategory" value="Create Category" name="submit">
                </div>
                </div>
              </form>
    




 










      

      <!-- Footer -->


      <?php include 'footer.php'; ?>



  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>




<script>
 $(document).ready(function(){
   $('#createcategory').click(function(e){
     e.preventDefault();
    $.ajax({
                  method:'POST',
                  url:'addproducthelper.php',
                  data:$("form").serialize(),
                  success:function(data)
                  {
                    debugger;
                    console.log(data);
                    // window.location.href = 'login.php';
                    
                  }
              });

              var mp=$('#monthlyprice').val();
              var ap=$('#annualprice').val();
              var sku1 = $('#sku').val();
              var ws   = $('#webspace').val();
              var bw   = $('#bandwidth').val();
              var fd   = $('#freedomain').val();
              var lg   = $('#languagetechnology').val();
              var mb   = $('#mailbox').val();

    $.ajax({
                  method:'POST',
                  url:'addproducthelper.php',
                  data:{
                    monthlyprice:mp,
                    annualprice:ap,
                    sku:sku1,
                    webspace:ws,
                    bandwidth:bw,
                    freedomain:fd,
                    languagetechnology:lg,
                    mailbox:mb,
                  },
                  success:function(data)
                  {
                    debugger;
                    console.log(data);
                    // window.location.href = 'login.php';
                    
                  }
              });
   });

   });




</script>


</body>

</html>