  


<?php include("admin/include/config.php");
$db_handle=new db_controller();
$counts = $db_handle->conn;
?>

<style>
@media only screen and (max-width: 600px) {
    .logo {
        width:200px !important;
    }
}



</style>
        
    
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-envelope"></i></span>agratour@gmail.com</li>
                                <li style="font-weight: bold;"><span><i class="fa fa-phone"></i></span>7739711714, 7992448873</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <!--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">-->
                    <!--    <div id="links">-->
                    <!--        <ul class="list-unstyled list-inline">-->
                    <!--            <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Login</a></li>-->
                    <!--            <li><a href="registration.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>-->
                                
                    <!--        </ul>-->
                    <!--    </div><!-- end links -->-->
                    <!--</div><!-- end columns -->				-->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
		
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    
                    <a href="#" class="navbar-brand"><img src="images/logo.png" class="logo" style="width: 250px;"></a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li><a href="index.php" >Home</a>
                            		
                        </li>
                        
                        
                           <li><a href="agra-tour-package.php"><span><i class="fa fa-globe link-icon fa fa-spin"></i></span> Tour Package</a>
                            		
                        </li>
                        <li><a href="cabs-booking.php"><span><i class="fa fa-car link-icon"></i></span> Cab</a>
                        
                        <li><a href="hotels-booking.php"><span><i class="fa fa-building link-icon"></i></span> Hotel Booking</a>
                           			
                        </li>
                      
                      
                        
                          			
                        
                        <li><a href="contact-us.php">Contact Us</a>
                          			
                        </li>
                   
                       
                		<li></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->        
        
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <img src="images/logo.png" style="width: 200px;">

                <div id="main-menu">
                	<div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    
                        <a href="index.php" class="list-group-item active"><span><i class="fa fa-home link-icon"></i></span>Home</a>
                       
                        
                        
                      
                        <a href="agra-tour-package.php" class="list-group-item" ><span><i class="fa fa-car link-icon"></i></span>Cab</a>
<a href="coming-soon-flight.php" class="list-group-item"><span><i class="fa fa-globe link-icon fa fa-spin"></i></span> Tour Package</a>
                            
                            
                            
                        </div><!-- end sub-menu -->
                      
                        
                        
                            <a href="cabs-booking.php" class="list-group-item" ><span><i class="fa fa-car link-icon"></i></span>Cab</a>

                     
                        <a href="hotels-booking.php" class="list-group-item"><span><i class="fa fa-building link-icon"></i></span>Hotels Booking</a>
                            <a href="contact-us.php" class="list-group-item"  ><i class="fa fa-globe link-icon fa fa-spin"></i></span> Contact Us</a>
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        