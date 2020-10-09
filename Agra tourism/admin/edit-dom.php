 
  <?php

 include("include/head.php");
?>
    <?php
include("include/header.php");?>
<?php 

if(isset($_GET['edit']))
{
    $edit = $_GET['edit'];
}
$que = "select * from domestic where id='$edit'";
$select = $db_handle->select($que);

foreach($select as $row=>$val);


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
    
     $imgc1 = $_POST['imgc1'];
    
    
    
    if($img1=="")
    {
        $img1=$imgc1;
    }
    
     $tmp1 = $_FILES['img1']['tmp_name'];
    
    
     $img2 =$_FILES['img2']['name'];
      $imgc2 = $_POST['imgc2'];
     if($img2=="")
    {
        $img2=$imgc2;
    }
    
     $tmp2 = $_FILES['img2']['tmp_name'];
    
      move_uploaded_file($tmp1,"../images/domestic/".$img1);
      move_uploaded_file($tmp2,"../images/domestic/".$img2);
    
      $details = mysqli_real_escape_string($counts,$_POST['details']);
    
    
    
   
 $query = "UPDATE `domestic` SET `location` = '$location',heading='$heading',price='$price',duration='$duration',overview='$overview',info='$info',iti='$iti',terms='$terms',image1='$img1',image2='$img2',details='$details' WHERE `id` = '$edit';";
    
    $insert = $db_handle->update($query);
    
   // exit();
        
        if($insert)
        {
            $msg="New Domestic Tour Packages Update..";
            
            echo "<script>window.location.href='mng-dom.php'</script>";
        }
        
    
    
}
 $que = "select * from domestic";
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
		<b>Add Domestic Tour Packages</b>
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
		        <input type="text" name="heading" class="form-control" value="<?php echo $val['heading'];?>">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Loction</label>
		        <input type="text" name="location" class="form-control" value="<?php echo $val['location'];?>">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Price</label>
		        <input type="text" name="price" class="form-control"  value="<?php echo $val['price'];?>">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Duration</label>
		        <input type="text" name="duration" class="form-control" value="<?php echo $val['duration'];?>">
		        </div>
                
                
		        
		        <div class="col-md-6">
		        
		        <label for="">Image1</label>
		        <input type="file" name="img1" class="form-control">
		        <input type="hidden" value="<?php echo $val['image1'];?>" name="imgc1">
		        <input type="hidden" value="<?php echo $val['image2'];?>" name="imgc2">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">image2</label>
		        <input type="file" name="img2" class="form-control">
		        </div>
		        
		        <div class="col-md-10">
		        
		        <label for="">OVER VIEW</label>
		        <textarea name="overview" id="" cols="30" rows="4" class="form-control"><?php echo $val['overview'];?></textarea>
		        </div>
		        
		        <div class="col-md-10">
		        
		        <label for="">PACKAGE DETAILS</label>
		        <textarea name="details" id="" cols="30" rows="4" class="form-control"><?php echo $val['details'];?></textarea>
		        </div>
		        
		        
		        
		        <div class="col-md-10">
		        
		        <label for="">ITINERARY</label>
		        <textarea name="iti" id="" cols="30" rows="4" class="form-control"><?php echo $val['iti'];?></textarea>
		        </div>
		        
		        <div class="col-md-10">
		        
		        <label for="">ADDITIONAL INFO</label>
		        <textarea name="info" id="" cols="30" rows="4" class="form-control"><?php echo $val['info'];?></textarea>
		        </div>
		        
		        <div class="col-md-10">
		        
		        <label for="">TERMS & CONDITIONS</label>
		        <textarea name="terms" id="" cols="30" rows="4" class="form-control"><?php echo $val['terms'];?></textarea>
		        </div>
		        
		        
		        <div class="col-md-4">
                
                
		           
		        </div>
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
  	
  	<?php
if(isset($_GET['del']))
{
    $del= $_GET['del'];
     $delete = "delete from domestic where id='$del'";
    $dmsg=$db_handle->delete($delete);
    
    if($dmsg)
    {
        //header("location:index.php");
        echo "<script>window.location='add-domestic.php';</script>";
    }
    
}

?>
  	