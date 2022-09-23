<?php
	include('connect/db.php');
?>	
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Vigilate For Rabble</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Greenlife - Nature & Environmental Non-Profit HTML5 Template">
        <meta name="author" content="BlueWindLab">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css" >
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix">

             <!--  end .top-bar  -->
            
            <section class="header-wrapper navgiation-wrapper">
            
                <div class="navbar navbar-default">			
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.html"><img alt="" src="images/logo.png"></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="hospital.php">Hospital</a></li>
                                <li><a href="krishibhavan.php">Krishibhavan</a></li>
                                <li><a href="forestry.php">Forestry</a></li>
                                <li><a href="complaint.php">Complaint</a></li>
                                <li><a href="notification.php">Notification</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </section>


        </header> <!-- end main-header  -->

        <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="0.1">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">


                        <h3>
                           Hospital
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> 
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->


        <!--  MAIN CONTENT  -->


        <section class="section-content-block section-contact-block">

            <div class="container">

                <div class="row">



<div class="col-sm-6 wow fadeInRight">

                        <div class="content-block">

                            <h2 class="contact-title">Contact us</h2>

                            <ul class="contact-info">
                                <li>
                                    <span class="icon-container"><i class="fa fa-home"></i></span>
                                    <address>3100 C/A Mouchak,Palakkad,Kerala</address>
                                </li>
                                <li>
                                    <span class="icon-container"><i class="fa fa-phone"></i></span>
                                    <address><a href="#">+093-120-525-9162</a></address>
                                </li>                              
                            </ul>

                           
                        </div> <!-- end .content-block  -->

                    </div>
                    
                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">

                            <h2 class="contact-title">Search By Location</h2>

                            <form role="form" action="krishibhavan_view.php" method="post" id="contact-form" autocomplete="off">

                                <div class="form-group">
                                    <input type="text" class="form-control"  name="name" placeholder="Location" required>                                            
                                </div>

                                 <div class="col-sm-12">                        
	                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-custom btn-block">Submit</button>
                                	</div>
                                </div>    
                                <div class="col-sm-6">                        
	                                <div class="form-group text-center">                                   
                                	</div>
                                </div>                          
								<div class="col-sm-6">                        
	                                <div class="form-group text-center">
                                    <a href="index.php" class="btn btn-block btn-danger">Back</a>
                                	</div>
                                </div>


                            </form>

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                     <!--  end col-sm-6  -->

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> <!-- end .section-content-block  -->


     
    
        
       <!-- FOOTER  -->
        
       <footer>
        <!-- FOOTER WIDGET AREA -->

            <section class="section-content-block footer-widget-area-bg">
                <div class="container wow fadeInUp">
                    
                    <div class="row">

                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <div class="footer-widget-area">
                                <figure class="footer-logo-img text-center">
                                    <img alt="Logo" src="images/logo.png">
                                </figure> <!-- end .cause-img  -->
                                <div class="contact-info">
                                 <p>Progress is impossible without change,<br/>and those who cannot change their minds cannot change anything.</p>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-details">
                                        <div class="social-icons margin-top-20">
                                             <a href="https://www.facebook.com/forestapp.cc">
                                            <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="https://twitter.com/search?q=%23forest">
                                            <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                            </a>
                                            <a href="https://www.instagram.com/forest_app/?hl=en">
                                            <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="#" class="margin-right-0">
                                            <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end .col-md-4  -->

                    </div> <!-- end .row  --> 
                </div> <!-- end .container  -->
            </section> <!--  end .footer-widget-area-bg -->

            <!--FOOTER CONTENT  -->

            <section class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">

                             <span>
                          	 <span>Copyright © 2022. All right reserved by Vigilate For Rabble</span>
                            </span>
                        </div> <!-- end .col-md-6  --> 
                        <div class="col-md-6 col-sm-12">
                            <div class="footer-nav">
                                <nav>
                                    
                                </nav>
                            </div>
                        </div> <!-- end .col-md-6  --> 
                    </div> <!-- end .row  --> 
                </div> <!-- end .container  --> 
            </section>  <!--  end .footer-area -->
            
        </footer> <!--  end of footer -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/wow.min.js"></script>
       <script src="js/jquery.backTop.min.js "></script>
       <script src="js/waypoints.min.js"></script>
       <script src="js/waypoints-sticky.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/jquery.stellar.min.js"></script>
       <script src="js/jquery.counterup.min.js"></script>
       <script src="js/venobox.min.js"></script>
       <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/jquery.gmap.min.js"></script>
       <script src="js/custom-scripts.js"></script>

    </body>

</html>