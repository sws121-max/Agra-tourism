 
  <?php

 include("include/head.php");
?>
    <?php
include("include/header.php");?>
<?php 



if(isset($_POST['submit']))
{
    $heading = mysqli_real_escape_string($counts,$_POST['heading']);
    
     $location = mysqli_real_escape_string($counts,$_POST['location']);
    
     $price = mysqli_real_escape_string($counts,$_POST['price']);
    
     $duration = mysqli_real_escape_string($counts,$_POST['duration']);
     
     $overview = mysqli_real_escape_string($counts,$_POST['overview']);
    
    $info = mysqli_real_escape_string($counts,$_POST['info']);
    
    $iti = mysqli_real_escape_string($counts,$_POST['iti']);
    
    $terms = mysqli_real_escape_string($counts,$_POST['terms']);
    
     $img1 = $_FILES['img1']['name'];
     $tmp1 = $_FILES['img1']['tmp_name'];
    
     $img2 =$_FILES['img2']['name'];
    
     $tmp2 = $_FILES['img2']['tmp_name'];
    
      move_uploaded_file($tmp1,"../images/international/".$img1);
      move_uploaded_file($tmp2,"../images/international/".$img2);
    
      $details = mysqli_real_escape_string($counts,$_POST['details']);
    
    
    
   
 
    $query = "insert into 	international(heading,location,price,image1,image2,details,duration,overview,iti,info,terms)values('$heading','$location','$price','$img1','$img2','$details','$duration','$overview',' $iti','$info','$terms')";
    $insert = $db_handle->insert($query);
    
   // exit();
        
        if($insert)
        {
            $msg="New International Tour Packages Add..";
            
            echo "<script>window.location.href='add-international.php'</script>";
        }
        
    
    
}
 $que = "select * from international";
$select = $db_handle->select($que);
$count = $db_handle->rowcount($que);
 ?>

 	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<?php include("include/sidemenu.php");?>
</div>  		</div>
  		<div class="col-md-10 content">
  			  <div class="panel panel-primary">
	<div class="panel-heading">
		<b>Add Hotels</b>
	</div>
	<div class="panel-body">
	<?php if(isset($msg)){ ?>
	<div class="alert alert-warning alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><?php  echo $msg;?></strong> 
  </div>
  <?php } ?>
		<form action="" method="post" enctype="multipart/form-data">
		    <div class="row form-group">
		        <div class="col-md-6">
		        
		        <label for="">Heading</label>
		        <input type="text" name="heading" class="form-control">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Loction</label>
		        <input type="text" name="location" class="form-control">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Price</label>
		        <input type="text" name="price" class="form-control">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Duration</label>
		        <input type="text" name="duration" class="form-control">
		        </div>
                
                
		        
		        <div class="col-md-6">
		        
		        <label for="">Image1</label>
		        <input type="file" name="img1" class="form-control">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">image2</label>
		        <input type="file" name="img2" class="form-control">
		        </div>
		        
		        <div class="col-md-10" style="margin-top:10px;">
		        
		        <label for="">OVER VIEW</label>
		        <textarea name="overview" id="" cols="30" rows="4" class="form-control"></textarea>
		        </div>
		        
		        <div class="col-md-10">
		        
		        <label for="">Hotel Facilities Details</label>
		        <textarea name="details" id="" cols="30" rows="4" class="form-control"></textarea>
		        </div>
		        
		        
		        
		        <div class="col-md-10">
		        
		        <label for="">Map</label>
		        <textarea name="iti" id="" cols="30" rows="4" class="form-control"></textarea>
		        </div>
		        
		        <div class="col-md-10">
		        
		        
		        <div class="col-md-4">
                <label for=""></label>
                <br>
                
		            <button type="submit" name="submit" class="btn btn-success btn-block">Save</button>
		        </div>
		        <div class="col-md-4">
                
		        </div>
		    </div>
		    
		</form>
	</div>
	
	
</div>
         
         
  		</div>
  		
  		
  		
  	</div>
  	
  	<?php
if(isset($_GET['del']))
{
    $del= $_GET['del'];
     $delete = "delete from international where id='$del'";
    $dmsg=$db_handle->delete($delete);
    
    if($dmsg)
    {
        //header("location:index.php");
        echo "<script>window.location='add-international.php';</script>";
    }
    
}

?>
  	