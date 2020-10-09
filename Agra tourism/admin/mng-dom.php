
 
  <?php

 include("include/head.php");
?>
    <?php
include("include/header.php");?>
<?php 


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
	
	
	
</div>
         
         <div class="panel panel-danger">
	<div class="panel-heading">
		<b>Manage Domestic Tour Packages</b>
	</div>
	<div class="panel-body">
	<?php 
        if($count>0)
        {
        ?>
		<table class="table">
        <tr>
            <th>Heading</th>
            <th>Location</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Image1</th>
            <th>Details</th>
            
        
            <th>Action</th>
        </tr>
        
        <?php
            foreach($select as $rows=>$val)
           {
            ?>
		    <tr>
		        <td><?php echo  ucwords($val['heading']);?></td>
		        <td><?php echo  ucwords($val['location']);?></td>
		        <td><?php echo  ucwords($val['price']);?></td>
		        <td><?php echo  ucwords($val['duration']);?></td>
		        <td><img src="../images/domestic/<?php echo  ($val['image1']);?>" alt="" width="100px" height="100px"></td>
		        <td><?php echo  ucwords($val['details']);?></td>
		        <td>
		        <a href="edit-dom.php?edit=<?php echo $val['id'];?> " class="btn btn-success">Edit</a>
		        <a href="mng-dom.php?del=<?php echo $val['id'];?> " class="btn btn-danger">Delete</a></td>
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
        echo "<script>window.location='mng-dom.php';</script>";
    }
    
}

?>
  	