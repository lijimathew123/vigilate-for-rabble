<?php
 	 require("auth.php");
  	include('../connect/db.php');	
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
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">All Peoples</h4>
                </div>
           </div>            
           
           <?php
		   	$result = $db->prepare("select * from user where utype='People'");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++)
			{
		   ?>
            <!-- Start -->
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../photo/<?php echo $row["photo"];?>" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"><?php echo $row["name"];?></h6>
                  <h4 class="card-title"><?php echo $row["panchayath"];?></h4>
                  <h4 class="card-title"><?php echo $row["cntno"];?></h4>
                  <p class="card-description">
                 	 <label>Gender</label><br>
                    <?php echo $row["sex"];?><br>
                    <label>Age</label><br>
                    <?php echo $row["age"];?><br>
                    <label>Date Of Birth</label><br>
                    <?php echo $row["dob"];?>
                  </p>
                  <p class="card-description">
                  	<label>Address</label><br>
                    <?php echo $row["addr"];?><br>
                    <label>Location</label><br>
                    <?php echo $row["location"];?><br>
                  </p>
                   <p class="card-description">
                  	<label>Communication</label><br>
                    <?php echo $row["email"];?><br>
                    <?php echo $row["wurl"];?>
                  </p>
                  <p class="card-description">
                  	<label>Join Date</label><br>
                    <?php echo $row["date"];?>
                  </p>
                  <a href="#" class="btn btn-primary btn-round" onClick="window.print()">Print</a>
                </div>
              </div>
            </div>
            <!-- End -->
          	<?php
			}
			?>
          
            
          </div>
        </div>
      </div>
       <?php include("include/footer.php");?> 
    </div>
  </div>
    <?php include("include/js.php");?>
</body>

</html>