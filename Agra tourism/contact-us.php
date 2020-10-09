<?php

if(isset($_POST['submit']))
{
$to = 'onrideyatra1111@gmail.com';
$subject = 'for Enquiry';
$from = 'peterparker@email.com';
    
$name = $_POST['name'];
    
$email = $_POST['email'];
$phone = $_POST['phone'];

$msg = $_POST['message'];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;"><b>Name -</b>'.$name.'</h1>';
$message .= '<p style="color:#080;font-size:18px;"><b>Email-</b>'.$email.'</p>';
$message .= '<p style="color:#080;font-size:18px;"><b>Phone-</b>'.$phone.'</p>';
$message .= '<p style="color:#080;font-size:18px;"><b>Message-</b>'.$msg.'</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject,$message, $headers)){
    echo '<script>window.alert("Your mail has been sent successfully.")</script>';
    
    echo "<script>window.location.href='index.php'</script>";
    
} else{
    echo '<script>window.alert("Unable to send email. Please try again.")</script>';
}
    
}
?>
<!doctype html>
<html lang="en">
    

<head>
        <title>Contact Us | Agra Tour & Travels</title>
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
    </head>
    
    
    <body>
    
        <?php include'include/header.php';?>
                            
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="contact-us-2">

                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7321571.687431796!2d76.97892026289809!3d26.359309129990145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d25.5940947!2d85.1375645!4m5!1s0x39738679f8e9beb3%3A0xa0442588e3976a82!2sanand+engineering+college+agra!3m2!1d27.2401074!2d77.840595!5e0!3m2!1sen!2sin!4v1559924727487!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!-- end map -->
        
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            
                            <div class="row">
                            	<div class="col-xs-12 col-sm-4"> 
                                	<div class="contact-block-2">  
                                    	<span class="border-shape-top"></span>                       
 						        		<span><i class="fa fa-map-marker"></i></span>
                                        <h4>Address</h4>
                                        <p>Anand Engineering College, Keetham,         Uttar Pradesh 282007</p>
                                        <span class="border-shape-bot"></span>
                                	</div><!-- end contact-block-2 -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-4"> 
                                	<div class="contact-block-2">   
                                    	<span class="border-shape-top"></span>                      
 						        		<span><i class="fa fa-envelope"></i></span>
                                        <h4>Email us at</h4>
                                        <p>agratour@gmail.com, agracab@gmail.com</p>
                                        <span class="border-shape-bot"></span>
                                	</div><!-- end contact-block-2 -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-4"> 
                                	<div class="contact-block-2">          
                                    	<span class="border-shape-top"></span>               
 						        		<span><i class="fa fa-phone"></i></span>
                                        <h4>Call us at</h4>
                                        <p>9065219832, 9155181584</p>
                                        <span class="border-shape-bot"></span>
                                	</div><!-- end contact-block-2 -->
                                </div><!-- end columns -->
                            </div><!-- end row -->
                            
                            <div id="contact-form-2" class="innerpage-section-padding">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1">
                                        <div class="page-heading">
                                            <h2>Contact Us</h2>
                                            <hr class="heading-line" />
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 contact-form-2-text">
                                                <p></p>
                                                <ul class="social-links list-inline list-unstyled">
                                                    <li><a href=""><span><i class="fa fa-facebook"></i></span></a></li>
                            	<li><a href=""><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li><a href=""><span><i class="fa fa-instagram"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li><a href=""><span><i class="fa fa-youtube-play"></i></span></a></li>
                                                </ul>
                                            
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-6">
                                            
                                                <form action="" method="post">
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                 <input type="text" class="form-control" placeholder="Name" name="name" required/>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group">
                                                                 <input type="email" class="form-control" placeholder="Email" name="email"  required/>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                         <input type="number" class="form-control" placeholder="Mobile" name="phone"  required/>
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="4" placeholder="Your Message" name="message"></textarea>
                                                    </div>
                                                    
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-orange" name="submit">Send</button>
                                                    </div>
                                                </form>
                                            
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
								</div>
                            </div>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end contact-us -->
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
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>


</html>
