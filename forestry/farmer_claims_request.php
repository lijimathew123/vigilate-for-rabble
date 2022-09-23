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
                  <h4 class="card-title">Claims Request</h4>
                </div>
           </div>            
           
           <?php
		   	$result = $db->prepare("select * from  complaintpost where frestryreply='' and fsat='Pending'");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++)
			{
		   ?>
            <!-- Start -->
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray"><?php echo $row["name"];?></h6>
                  <h4 class="card-title"><?php echo $row["cname"];?></h4>
                  <h4 class="card-title"><?php echo $row["cntno"];?></h4>
                  <p class="card-description">
                    <?php echo $row["descp"];?>
                  </p>
                  <p class="card-description">
                  	<label>Krishibhavan</label><br>
                    <?php echo $row["kst"];?>
                  </p>
                   <p class="card-description">
                  	<label>Forestry Message</label><br>
                    <?php echo $row["frestryreply"];?><br>
                    <?php echo $row["fdate"];?>
                  </p>
                  <p class="card-description">
                  	<label>Forestry</label><br>
                    <?php echo $row["fsat"];?>
                  </p>
                  <a href="farmer_claims_request_view.php<?php echo '?cmpsid='.$row["cmpsid"]; ?>" class="btn btn-primary btn-round">More</a>
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