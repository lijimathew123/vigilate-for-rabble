<?php
 	 require("auth.php");
  	include('../connect/db.php');	
    $Log_Id=$_SESSION['SESS_FORESTRY_ID'];
?>	
<!DOCTYPE html>
<html lang="en">

<head>
  	<?php include("include/header.php");?>
</head>

<body class="">
  <div class="wrapper ">
   	 <?php include("include/leftmenu.php");?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include("include/navbar.php");?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Farmers</p>
                  <h3 class="card-title">
                  <?php
						$result = $db->prepare("select count(*) from user where utype='Farmer'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>               
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">People</p>
                  <h3 class="card-title">
                   <?php
						$result = $db->prepare("select count(*) from user where utype='People'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Krishibhavan</p>
                  <h3 class="card-title">
                   <?php
						$result = $db->prepare("select count(*) from user where utype='Krishibhavan'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>              
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-hospital-o"></i>
                  </div>
                  <p class="card-category">Hospital</p>
                  <h3 class="card-title">
                   <?php
						$result = $db->prepare("select count(*) from user where utype='Hospital'");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{
							echo"".$row['count(*)']."";
						}
					?>
                  </h3>
                </div>                
              </div>
            </div>
          </div>

          
        </div>
      </div>
     <?php include("include/footer.php");?> 
    </div>
  </div>
 	
   <?php include("include/js.php");?>
</body>

</html>