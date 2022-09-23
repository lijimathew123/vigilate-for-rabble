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
        <meta name="author" content="xenioushk">
        <meta http-equiv="refresh" content="3">
        <link rel="shortcut icon" href="images/favicon.png" />
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
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
                            <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
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

        <!--  HOME SLIDER BLOCK  -->
        
        <!-- slider start -->
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel owl-theme">
                
                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content">
                        <div class="container">
                            <h2>GROW TREES FOR YOUR FUTURE</h2>
                            <h3>Save The Environment and You Will Save Life And Your Future</h3>
                        </div><!-- /.slider-content -->
                    </div>
                </div>
                
                <div class="item">
                    <img src="images/home_1_slider_2.jpg" alt="img">
                    <div class="slider-content">
                        <div class="container">
                            <h2>GREEN ENVIRONMENT FOR LIFE</h2>
                            <h3>Ensure Green and Healthy Environment For Better Living World</h3>
                        </div><!-- /.slider-content -->
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- slider end -->
        
        <!--  HOW WE WORK SECTION 1 -->

        <section class="section-content-block section-how-we-work section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Latest </span> Notification</h2>
                        <p class="section-subheading">
                            Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!--  end .row  -->

                <div class="row wow fadeInUp">

                    <?php				
					$result = $db->prepare("select * from notification");
					$result->execute();
					for($i=1; $row = $result->fetch(); $i++)
					{
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        
                        <div class="service-block-bg">

                            <article class="service-block">
                                <h2><?php echo $row["location"];?></h2>
                                 <h2><?php echo $row["name"];?></h2>
                                <p><?php echo $row["date"];?>
                                 <p><?php echo $row["timr"];?>
                                    <br /><br /><a href="#" class="service_read_more"></a>
                                </p>
                                
                                <i class="fa fa  fa-warning"></i>

                            </article>

                        </div>
                    </div> <!--  end col-sm-6  -->
                    
                   <?php } ?>

                </div> <!-- end row  -->
                

            </div> <!--  end .container  -->

        </section> <!--  end .section-how-we-work -->
        
        <!--  CAUSE SECTION  -->

         <!-- end .cause-section-1  -->
        
        
        <!-- TEAM SECTION 2 -->

        <section class="section-content-block section-our-team  section-pure-white-bg">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading section-heading">Volunteers</h2>
                         <p class="section-subheading section-subheading">
                            Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                            <figure class="team-member">
                                <a href="#" title="Linto Paul">
                                    <img src="images\images.jpeg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>Linto Paul</h3>                                    
                          

                            <div class="team-social-share clearfix">

                             <a class="fa fa-facebook rectangle" href="https://www.facebook.com/search/top/?q=Linto%20Linto" title="Facebook"></a>
                                <a class="fa fa-instagram rectangle" href="https://www.instagram.com/linto_kurian/?hl=en" title="instagram"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="https://www.linkedin.com/uas/login-submit" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       
                             <figure class="team-member">
                                <a href="#" title="Aljo Thomas">
                                    <img src="images\images (1).jpeg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>Aljo Thomas</h3>                                   
                             

                            
                            <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="https://www.facebook.com/search/top/?q=Aljo" title="Facebook"></a>
                                <a class="fa fa-instagram rectangle" href="https://www.instagram.com/aljo_a_t_k/" title="instagram"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin/aljo"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                           
                            <figure class="team-member">
                                <a href="#" title="Aneeta zecaria">
                                    <img src="images\images (3).jpeg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>Aneeta zecaria</h3>                                    
                            

                           <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="https://www.facebook.com/search/top/?q=Aneeta" title="Facebook"></a>
                                <a class="fa fa-instagram rectangle" href="https://instagram.com/kishan08_?igshid=YmMyMTA2M2Y=" title="instagram"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="https://in.linkedin.com/" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                             <figure class="team-member">
                                <a href="#" title="Maria John">
                                    <img src="images\images (2).jpeg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>Maria John</h3>                                   
                                                         
                            

                           <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="https://www.facebook.com/maria%20john" title="Facebook"></a>
                                <a class="fa fa-instagram rectangle" href="https://www.instagram.com/mariajohnmarmar/?hl=en" title="instagram"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->

                </div> <!-- end .row  --> 

            </div> <!-- end .container  -->

        </section> <!--  end .section-our-team -->
        
        <!--  CTA SECTION  -->

        <section class="cta-section-2">
            <div class="container wow fadeInUp animated">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h5>WATCH AWESOME VIDEO OF</h5>
                        <h2> VOLUNTARY ACTIVITY </h2>
                        <a class="video-icon" href="images\WhatsApp Video 2022-08-01 at 10.36.26 AM.mp4">
                           <span class="fa fa-play fa-4x"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        

        <!--  EVENT SECTION  -->

         <!-- end .event-section-1  -->
        
        
        <!--  COUNTER SECTION  -->

        <section class="section-content-block section-counter">

            <div class="container-fluid wow fadeInUp">

                <div class="row">

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">
                            
                            <h4>Panchayath</h4>
                            <span class="counter">400</span>
                            
                        </div>

                    </div> <!--  end col-sm-3  -->

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">

                            
                            <h4>Kudumbasree</h4>
                            <span class="counter">262</span>
                            

                        </div>

                    </div> <!--  end col-sm-3  -->

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">

                            
                            <h4>Police Station</h4>
                            <span class="counter">653</span>
                            

                        </div>

                    </div> <!--  end col-sm-3  -->

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">
                            
                            <h4>People</h4>
                            <span class="counter">364</span>

                        </div>

                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">

                           
                            <h4>Post</h4>
                            <span class="counter">964</span>

                        </div>

                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">
                            
                            <h4>Complaint</h4>
                             <span class="counter">101</span>

                        </div>

                    </div> <!--  end col-sm-3  -->

                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .section-counter -->
    
        
        <!--  GALLERY CONTENT  -->

        <section class="section-content-block no-bottom-padding">

            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Photo</span> Gallery</h2>
                        <p class="section-subheading">
                             Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container -->
            
            <div class="container-fluid wow fadeInUp">
                

                <div class="row no-padding-gallery">

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_1.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_5.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-6 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_3.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->
                    
                </div> <!-- end .row  -->
                    
                <div class="row no-padding-gallery">

                    <div class="col-md-6 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_4.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_2.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_6.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->


                </div> <!-- end .row  -->
                
            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->
        
        <!-- CLIENT LOGO SECTION  -->

       
        
       
        
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
                             <span>Copyright © 2022. All right reserved by Vigilate For Rabble</span>
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
       <script src="js/custom-scripts.js"></script>
   </body>

</html>