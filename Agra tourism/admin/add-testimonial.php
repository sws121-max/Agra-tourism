 
  <?php

 include("include/head.php");
?>
    <?php
include("include/header.php");?>
<?php 



if(isset($_POST['submit']))
{
    $heading = mysqli_real_escape_string($counts,$_POST['heading']);
    
    
     
     $overview = mysqli_real_escape_string($counts,$_POST['overview']);
    
   
    

    
     $img2 =$_FILES['img2']['name'];
    
     $tmp2 = $_FILES['img2']['tmp_name'];
    
     
      move_uploaded_file($tmp2,"../images/domestic/".$img2);
    
      
    
    
    
   
 
    $query = "insert into 	testi(heading,image,decr)values('$heading','$img2','$overview')";
    $insert = $db_handle->insert($query);
    
   // exit();
        
        if($insert)
        {
            $msg="New Domestic Tour Packages Add..";
            
            echo "<script>window.location.href='add-testimonial.php'</script>";
        }
        
    
    
}
 $que = "select * from testi";
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
  		<div class="col-md-8 content">
  			  <div class="panel panel-primary">
	<div class="panel-heading">
		<b>Add Testimonial</b>
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
		        
		        <label for="">Name</label>
		        <input type="text" name="heading" class="form-control">
		        </div>
		        
		        
		        
		        <div class="col-md-6">
		        
		        <label for="">image</label>
		        <input type="file" name="img2" class="form-control">
		        </div>
		        
		        <div class="col-md-6">
		        
		        <label for="">Description</label>
		        <textarea name="overview" id="" cols="30" rows="4" class="form-control"></textarea>
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
        
  <div class="panel panel-danger">
	<div class="panel-heading">
		<b>Manage Testiminial</b>
	</div>
	<div class="panel-body">
	<?php 
        if($count>0)
        {
        ?>
		<table class="table">
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            
            
        
            <th>Action</th>
        </tr>
        
        <?php
            foreach($select as $rows=>$val)
           {
            ?>
		    <tr>
		        <td><?php echo  ucwords($val['heading']);?></td>
		        <td><img src="../images/domestic/<?php echo  $val['image'];?>" alt="" width="100px" height="100px"></td>
		        <td><?php echo  ucwords($val['decr']);?></td>
		       
		       
		       
		        <td><a href="add-testimonial.php?del=<?php echo $val['id'];?> " class="btn btn-danger">Delete</a></td>
		    </tr>
		    <?php } ?>
		</table>
		<?php }
        else
        {
            echo "<b>No Data Available..</b>";
        }
        
        ?>
	</div>
	
	
</div>		
  		
  	</div>
  	
  	<?php
if(isset($_GET['del']))
{
    $del= $_GET['del'];
     $delete = "delete from testi where id='$del'";
    $dmsg=$db_handle->delete($delete);
    
    if($dmsg)
    {
        //header("location:index.php");
        echo "<script>window.location='add-testimonial.php';</script>";
    }
    
}

?>
  	