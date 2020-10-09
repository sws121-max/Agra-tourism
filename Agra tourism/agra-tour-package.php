<!doctype html>
<html lang="en">
    

<head>
        <title>Tour Packages | Agra Tour & Travels</title>
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
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="css/jquery.colorpanel.css">
        
        <!--Jquery UI Stylesheet-->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
    </head>
    
    
    <body>
    <?php include'include/header.php';?>
        <!--====== LOADER =====-->
        <div class="loader"></div>
        
        
        
        <!--=================== PAGE-COVER =================-->
        <section class="page-cover" id="cover-hotel-grid-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title"> Tour Packages</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Active</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="hotel-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                            <div class="row">
                                    <?php
                    $quec = "select * from domestic";
$selectc = $db_handle->select($quec);
                    foreach($selectc as $row=>$val)
                    {
                    ?>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block h-grid-block">
                                    	<div class="main-img h-grid-img">
                                        	<a href="hotel-detail-right-sidebar.html">
                                    			<img src="images/domestic/<?php echo $val['image1'];?>" class="img-responsive" alt="hotel-img" style="height:252px;"/>
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price"><?php echo $val['price'];?>.00<span class="divider">|</span><span class="pkg"><?php echo $val['duration'];?></span></li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                    	</div><!-- end h-grid-img -->
                                        
                                         <div class="block-info h-grid-info">
                                         	<div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                            </div><!-- end rating -->
                                            
                                         	<h3 class="block-title"><a href="hotel-detail-right-sidebar.html"><?php echo $val['heading'];?></a></h3>
                                            <p class="block-minor">From: <?php echo $val['location'];?></p>
                                            
                                            <div class="grid-btn pull-left">
                                            	<a href="domestic-tour-package-booking-details.php?details=<?php echo $val['heading'];?>" class="btn btn-orange btn-block btn-lg">Book Now</a>
</div><!-- end grid-btn -->
<div class="grid-btn pull-right">
                                            	<a href="domestic-tour-package-booking-details.php?details=<?php echo $val['heading'];?>" class="btn btn-orange btn-block btn-lg">View Details</a>
                                            </div><!-- end grid-btn -->
                                         </div><!-- end h-grid-info -->
                                    </div><!-- end h-grid-block -->
                                </div>
                                <?php } ?>
                                <!-- end columns -->
                                
                         
                                
                            </div><!-- end row
                            
                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->
                    
                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end hotel-grid -->
        </section><!-- end innerpage-wrapper -->
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-dollar"></i></span>
                        	<h3>Best Price Guarantee</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-lock"></i></span>
                        	<h3>Safe and Secure</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-thumbs-up"></i></span>
                        	<h3>Best Travel Agents</h3>
                            <p></p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-bars"></i></span>
                        	<h3>Travel Guidelines</h3>
                            <p></p>
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
        <script src="js/jquery-ui.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
		<script src="js/custom-price-slider.js"></script>
        <!-- Page Scripts Ends -->
    </body>


</html>
