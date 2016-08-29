<?php
$section="order";
include '../includes/header.php';
include '../includes/connection.php';

$id=$_REQUEST['id'];
$query1=mysql_query("SELECT * FROM `order` WHERE Id=$id" );

$ress=mysql_fetch_array($query1);

?>

<?php 
	if(isset($_POST['submit']) AND $_POST['submit']=="Submit"){
		$Name=$_POST['Name'];
		$Description=$_POST['Description'];
		$filename = $_FILES['Image']['name'];
		$source=$_FILES['Image']['tmp_name'];
		$Price=$_POST['Price'];
		$target_path="../../order/".$_FILES['Image']['name'];
		if($filename==""){
			$filename=$_POST['DImage'];
					}
		mysql_query("UPDATE `order` SET Name = '$Name', Description ='$Description', Image='$filename' ,Price='$Price' WHERE Id = $id");

		move_uploaded_file($source, $target_path);
		header('Location:orderlist.php');		
					}
?>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<form name="add" action="" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="Name">Name</label>
			    <input type="text" class="form-control" name="Name" value="<?php echo $ress['Name'];?>">
			  </div>
			  <div class="form-group">
			    <label for="Description">Description</label>
			    <input type="text" class="form-control" name="Description" value="<?php echo $ress['Description'];?>">
			  </div>
			  <div class="form-group">
			    <label for="Image">Image</label>
			    <input type="file" name="Image" /><img src="<?php echo $site_url;?>/order/<?php echo $ress['Image'];?>"  style=height:30px;width:30px alt=""/>
			    <input type="hidden" name="DImage" value="<?php echo $ress['Image'];?>"/>
			   </div>
			   <div class="form-group">
			    <label for="Price">Price</label>
			    <input type="number" class="form-control" name="Price" value="<?php echo $ress['Price'];?>">
			  </div>
			  
			  <input type="submit" class="btn btn-default" name="submit" value="Submit"/>
			</form>
		</div>
			