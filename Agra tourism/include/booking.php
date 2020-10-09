                               
<?php

if(isset($_POST['submit']))
{
$to = 's.akhtar996640@gmail.com';
$subject = 'for Enquiry';
$from = 'peterparker@email.com';
    
$name = $_POST['first'];

    $name1 = $_POST['last'];
    
$email = $_POST['email'];
$phone = $_POST['phone'];

$date = $_POST['date'];
    
    $child = $_POST['child'];
    
    $adult = $_POST['adult'];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;"><b>Name -</b>'.$name.'  '.$name1.'</h1>';

$message .= '<p style="color:#080;font-size:18px;"><b>Email-</b>'.$email.'</p>';
$message .= '<p style="color:#080;font-size:18px;"><b>Phone-</b>'.$phone.'</p>';
$message .= '<p style="color:#080;font-size:18px;"><b>Booking Date-</b>'.$date.'</p>';
$message .= '<p style="color:#080;font-size:18px;"><b>Adult-</b>'.$adult.'</p>';
$message .= '<p style="color:#080;font-size:18px;"><b>Children-</b>'.$child.'</p>';
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
                               <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">INR <?php echo $val['price'];?>.00 <br><span><?php echo $val['heading'];?></span></h2>
                            
                            	<div class="booking-form">
                                	<h3>Book Tour</h3>
                                    <p>Find your dream tour today</p>
                                    
                                    <form action="" method="post">
                                    	<div class="form-group">
                                    		<input type="text" class="form-control" placeholder="First Name" name="first" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Last Name" name="last" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="email" class="form-control" placeholder="Email" name="email" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Phone" name="phone" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                    		<input type="text" class="form-control dpd3" placeholder="Booking Date" required/ name="date">
                                        </div>
                                        
                                        <div class="row">
                                        	<div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" name="adult">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
<option>4</option>
<option>5</option>

                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">    
                                                <div class="form-group right-icon">
                                                    <select class="form-control" name="child">
                                                        <option selected>Children</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>

                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        
                                        <div class="checkbox custom-check">
                                        	<input type="checkbox" id="check01" name="checkbox"/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-block btn-orange">Confirm Booking</button>
                                    </form>
                         
                                </div><!-- end booking-form -->
                            </div>