
<!------ Include the above in your HEAD tag ---------->
<?php
include("include/head.php");
?>
    <?php
include("include/header.php");?>
<?php 



if(isset($_POST['submit']))
{
    $city = mysqli_real_escape_string($counts,$_POST['city']);
    
    $heading = mysqli_real_escape_string($counts,$_POST['heading']);
    
    $des = mysqli_real_escape_string($counts,$_POST['desc']);
    
    $c1 = mysqli_real_escape_string($counts,$_POST['contact1']);
    
    $c2 = mysqli_real_escape_string($counts,$_POST['contact2']);
    
    $address = mysqli_real_escape_string($counts,$_POST['address']);
    
   
    
 
    $query = "insert into 	packers(city,heading,des,contact1,contact2,address)values('$city','$heading','$des','$c1','$c2','$address')";
    $insert = $db_handle->insert($query);
        
        if($insert)
        {
            $msg="New City Add..";
            
            echo "<script>window.location.href='add-post.php'</script>";
        }
        
    
    }

$que = "select * from packers";
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
		Add City
	</div>
	<div class="panel-body">
	<?php if(isset($msg)){ ?>
	<div class="alert alert-warning alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><?php  echo $msg;?></strong> 
  </div>
  <?php } ?>
		<form action="" method="post">
		    <div class="row form-group">
		        <div class="col-md-6">
		        
		        <label for="">Choose City</label>
		        <select name="city" id="" class="form-control" required>
               <option value="">-Select-</option>
                <?php
                    $quec = "select * from city";
$selectc = $db_handle->select($quec);
                    foreach($selectc as $row=>$valc)
                    {
                    ?>
		            <option value="<?php echo $valc['name'];?>"><?php echo ucwords($valc['name']);?></option>
		            <?php } ?>
		        </select>
		        </div>
		        
		        <div class="col-md-6">
                <label for="">Heading</label>
                <br>
                
		            <input type="text" name="heading" class="form-control" required>
		        </div>
		        
		        
		        <div class="col-md-6">
                <label for="">Contact1</label>
                <br>
                
		            <input type="text" name="contact1" class="form-control" required>
		        </div>
		        
		        <div class="col-md-6">
                <label for="">Contact2</label>
                <br>
                
		            <input type="text" name="contact2" class="form-control" required>
		        </div>
		        <div class="col-md-6">
                <label for="">Description</label>
                <br>
                
		           
		            <textarea name="desc" id="" cols="30" rows="2" class="form-control"></textarea>
		        </div>
		        <div class="col-md-6">
                <label for="">Address</label>
                <br>
                
		            <textarea name="address" id="" cols="30" rows="2" class="form-control"></textarea>
		        </div>
		        
		         
		        
		        
		        
		        <div class="col-md-12">
                <label for=""></label>
                <br>
                
		            <center><button type="submit" name="submit" class="btn btn-success btn-block">Save</button></center>
		        </div>
		    </div>
		    
		</form>
	</div>
	
	
</div>
        </div>
        <div class="col-md-8 content">
         
         <div class="panel panel-danger">
	<div class="panel-heading">
		Manage City
	</div>
	<div class="panel-body">
	<?php 
        if($count>0)
        {
        ?>
        <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
        </script>
		<table class="table display" id="table_id">
       <thead>
        <tr>
            <th>City Name</th>
            <th>Heading</th>
            <th>Description</th>
           
            <th>Contact</th>
             <th>Address</th>
            
            <th>Action</th>
        </tr>
            </thead>
        <?php
            foreach($select as $rows=>$val)
           {
            ?>
            <tbody>
		    <tr>
		        <td><?php echo  ucwords($val['city']);?></td>
		        <td><?php echo  ucwords($val['heading']);?></td>
		        <td><?php echo  ucwords($val['des']);?></td>
		        <td><?php echo  ucwords($val['contact1']);?>/ <?php echo  ucwords($val['contact2']);?></td>
		          <td><?php echo  ucwords($val['address']);?></td>
		        <td><a href="add-post.php?del=<?php echo $val['id'];?> " class="btn btn-danger">Delete</a></td>
		    </tr>
		    </tbody>
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
     $delete = "delete from packers where id='$del'";
    $dmsg=$db_handle->delete($delete);
    
    if($dmsg)
    {
        //header("location:index.php");
        echo "<script>window.location='add-post.php';</script>";
    }
    
}

?>
  	