<?php

if(isset($_POST['submit']))
{
$to = 's.akhtar996640@gmail.com';
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
        <title>Cab Booking Registration| Agra Tour & Travels</title>
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
    
        <!--====== LOADER =====-->
        
        
        
        <?php include'include/header.php';?>
       
        
        <!--================ PAGE-COVER =================-->
        <section class="page-cover" id="cover-registration">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Book a Cab (call now:-7739711714, 7992448873)</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Registration</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3 style="color:blue;">Book a Cab Now</h3>
                                    <p>Please Also Read Terms & Conditions</p>
                                    <form method="post" action="">
                                            
                                        <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Please Enter Full Name"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
        
                                        <div class="form-group">
                                             <input type="email" name="email" class="form-control" placeholder="Enter Your Email"  required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="number" name="phone" class="form-control" placeholder="Enter Your Mobile Number"  required/>
                                             <span><i class="fa fa-phone"></i></span>
                                        </div>
                                        
                                         <div class="clearfix"></div>
        
                                        <div class="">
                                              <textarea class="form-control" name="message"
                                                  
                                               rows="6" name="message" placeholder="Enter Message"></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-orange btn-block" name="submit">Submit</button>
                                    </form>
                                    
                                    <!-------<div class="other-links">
                                    	<p class="link-line">Already Have An Account ? <a href="#">Login Here</a></p>
                                    </div>-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <ul class="font">
                                        <h3>TERMS AND CONDITIONS</h3>
                                        <li>Minimum 200 kms for a day on return basis


                                        <li>Meter is based on pick-up point to dropping point / on return basis</li>


                                        <li>Any parking fee, toll tax, road tax, border crossing fee not included in tariff.</li>


                                        <li>After 10.30 pm night charge 250/- for small cars and also 250/- SUV will apply and after midnight( 12 Night) 2nd day charge apply.</li>


                                        <li>250/night for small cars and allowances for all SUV cars need to pay separately.</li>


                                        <li>Guest are requested to keep neat and clean the car as possible</li>


                                        <li>Reconfirm your booking 01 day in advance calling 9065219832, 9155181584 in case advance</li>


                                        <li>booking, confirm booking will be made after receipt of token money.</li>
                                        
                                        
                                    </ul>
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end registration -->
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
