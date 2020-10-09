<!doctype html>
<html lang="en">
    

<head>
        <title>Domestic Tour Package Details | Agra Tour & Travels</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="css/jquery.colorpanel.css">
        
        <!-- Slick Stylesheet -->
		<link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
    </head>
    
    
    <body>
    
        <?php include'include/header.php';?>
        
               <?php
        if(isset($_GET['details']))
        {
             $delt = $_GET['details'];
        }
                    $quec = "select * from domestic where heading='$delt'";
$selectc = $db_handle->select($quec);
             foreach($selectc as $row=>$val)      
                    ?>
        <!--================ PAGE-COVER ================-->
        <section class="page-cover" id="cover-tour-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title"><?php echo ucwords($val['heading']);?></h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Domestic Tour Package Booking Details</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="tour-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="images/domestic/<?php echo $val['image1'];?>" class="img-responsive" alt="feature-img" style="height:350px"/></div>
                                   <div><img src="images/domestic/<?php echo $val['image2'];?>" alt="feature-img" style="height:350px"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image1'];?>" alt="feature-img" style="height:350px"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image1'];?>" alt="feature-img" style="height:350px"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image2'];?>" alt="feature-img" style="height:350px"/></div>
                                </div><!-- end feature-slider -->
                            	
                                <div class="feature-slider-nav">
                                    <div><img src="images/domestic/<?php echo $val['image1'];?>" class="img-responsive" alt="feature-thumb" style="height:80px;"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image2'];?>" class="img-responsive" alt="feature-thumb" style="height:80px;"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image1'];?>" class="img-responsive" alt="feature-thumb" style="height:80px;"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image2'];?>" class="img-responsive" alt="feature-thumb" style="height:80px;"/></div>
                                    <div><img src="images/domestic/<?php echo $val['image1'];?>" class="img-responsive" alt="feature-thumb" style="height:80px;"/></div>
                                </div><!-- end feature-slider-nav -->
                                
                                <ul class="list-unstyled features tour-features">
                                	<li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Price Per Person</p><p class="f-data">INR <?php echo $val['price'];?>/-</p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data"><?php echo $val['duration'];?></p></div></li>
                                    
                                </ul>
                            </div><!-- end detail-slider -->  

                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                                    <li><a href="#package-details" data-toggle="tab">Package Details</a></li>
                                    <li><a href="#itinerary" data-toggle="tab">Itinerary</a></li>
                                    <li><a href="#additional-info" data-toggle="tab">Additional Info</a></li>
                                    <li><a href="#terms-conditions" data-toggle="tab">Terms & Conditions</a></li>

                                </ul>
                            	
                                <div class="tab-content">

                                    <div id="overview" class="tab-pane in active">
                                    	<div class="row">
                                    		
                                        	
                                            <div class="col-sm-12 col-md-12 tab-text">
                                        		<h3>Over View</h3>
                                                <p><?php echo $val['overview'];?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->
                                	
                                    <div id="package-details" class="tab-pane">
                                    	<div class="row">
                                    		
                                        	
                                            <div class="col-sm-12 col-md-12 tab-text">
                                        		<h3>Package Details</h3>
                                                <pre><?php echo $val['details'];?></pre>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end restaurant -->
                                    
                                    <div id="itinerary" class="tab-pane">
                                    	<div class="row">
                                    		
                                        	
                                            <div class="col-sm-12 col-md-12 tab-text">
                                        		<h3>Itinerary</h3>
                                                <p><?php echo $val['iti'];?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end pick-up -->
                                    
                                    
                                    
                                     <div id="additional-info" class="tab-pane">
                                    	<div class="row">
                                    		
                                        	
                                            <div class="col-sm-12 col-md-12 tab-text">
                                        		<h3>additional info</h3>
                                                <p><?php echo $val['info'];?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end pick-up -->
                                    
                                     <div id="terms-conditions" class="tab-pane">
                                    	<div class="row">
                                    		
                                        	
                                            <div class="col-sm-12 col-md-12 tab-text">
                                        		<h3>terms & conditions</h3>
                                                <p><?php echo $val['terms'];?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end pick-up -->
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->
                            
                        </div>
                                                
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">
                            
                            <?php include("include/booking.php"); ?>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block main-block ad-block">
                                        <div class="main-img ad-img">
                                            <a href="cabs-booking.php">
                                                <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                                <div class="ad-mask">
                                                    <div class="ad-text">
                                                        <span>Luxury</span>
                                                        <h2>Car</h2>
                                                        <span>Offer</span>
                                                    </div><!-- end ad-text -->
                                                </div><!-- end columns -->
                                            </a>
                                        </div><!-- end ad-img -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                                <?php include'include/need-help.php';?>
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->  
                        
                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end tour-details -->
        </section><!-- end innerpage-wrapper -->
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-dollar"></i></span>
                        	<h3>Best Price Guarantee</h3>
                            
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-lock"></i></span>
                        	<h3>Safe and Secure</h3>
                            
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-thumbs-up"></i></span>
                        	<h3>Best Travel Agents</h3>
                            
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-bars"></i></span>
                        	<h3>Travel Guidelines</h3>
                            
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end best-features -->
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>	
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                    <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->
        <?php include'include/footer.php';?>
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.colorpanel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-slick.js"></script>
        <!-- Page Scripts Ends -->
    </body>


</html>
