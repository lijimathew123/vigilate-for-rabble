<?php
 	 require("auth.php");
  	include('../connect/db.php');	
?>	
<!DOCTYPE html>
<html lang="en">

<head>
  	<?php include("include/header.php");?>
    <meta http-equiv="refresh" content="3">
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
          <div class="card">
            <div class="card-header card-header-danger">
              <h3 class="card-title">Notication</h3>
              <p class="card-category"> Track Animal
              </p>
            </div>
            <div class="card-body">
              <div class="row">
                
                <div class="col-md-6">
                  <div class="alert alert-primary">
                   	 <table class="table">
                        <thead>
                            <tr>    
                                <th>#</th> 
                                <th>Location</th> 
                                <th>Animal</th> 
                                <th>Date</th>    
                                <th>Time</th>     
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $result = $db->prepare("select * from  notification");
                            $result->execute();
                            for($i=1; $row = $result->fetch(); $i++)
                                {	
                                    echo"<tr>";			
									echo"<td>".$i."</td>";													
                                    echo"<td>".$row["location"]."</td>";
									echo"<td>".$row["name"]."</td>";		
                                    echo"<td>".$row["date"]."</td>";	
								 	echo"<td>".$row["timr"]."</td>";	
                                    echo"</tr>";										
                                }
                         ?>	
                        </tbody>
                    </table>     
                  </div>                                                     
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