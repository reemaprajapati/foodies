<?php
$section="order";
include '../includes/header.php';
include '../includes/connection.php';

	if(isset($_POST['submit']) AND $_POST['submit']=="Submit"){
		$Name=$_POST['Name'];
		$filename = $_FILES['Image']['name'];
		$source=$_FILES['Image']['tmp_name'];
		$Description=$_POST['Description'];
	
		$Price=$_POST['Price'];
		$target_path="../../order/".$_FILES['Image']['name'];
		$mysql_query ="INSERT INTO `order` VALUES ('','$Name','$Description','$filename','$Price')";
		$sql = mysql_query($mysql_query);
if(!$sql){
	echo mysql_error();
	die;
}
		if(!move_uploaded_file($source, $target_path)){
			echo mysql_error();
			die;
		};
		header('Location:orderlist.php');

	}
?>

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<form name="add" action="" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="Name">Name</label>
			    <input type="text" class="form-control" name="Name" placeholder="Name" required>
			  </div>
			  <div class="form-group">
			    <label for="Description">Description</label>
			    <input type="text" class="form-control" name="Description" placeholder="Description" required>
			  </div>
			  <div class="form-group">
			    <label for="Image">Image</label>
			    <input type="file" name="Image" required>
			   </div>
			   <div class="form-group">
			    <label for="Price">Price</label>
			    <input type="number" class="form-control" name="Price" placeholder="Price" required>
			  </div>
			  
			  <input type="submit" class="btn btn-default" name="submit" value="Submit"/>
			</form>
		</div>

