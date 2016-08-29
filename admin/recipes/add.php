<?php
$section="recipe";
include '../includes/header.php';
include '../includes/connection.php';

if(isset($_POST['submit']) AND $_POST['submit']=="Submit"){
		$Name=$_POST['Name'];
		$filename = $_FILES['Image']['name'];
		$source=$_FILES['Image']['tmp_name'];
		
		$Description=$_POST['Description'];
	
	
		$target_path="../../recipe/".$_FILES['Image']['name'];
		$mysql_query ="INSERT INTO `recipe` VALUES ('','$Name','$Description','$filename')";
		

		$sql = mysql_query($mysql_query);
		if(!$sql){
			echo mysql_error();
			die;
		}
		move_uploaded_file($source, $target_path);
		header('Location:recipelist.php');

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
			    <textarea id="TypeHere" name="Description" placeholder="Description" required> </textarea>
			  </div>
			  <div class="form-group">
			    <label for="Image">Image</label>
			    <input type="file" name="Image" required>
			   </div>
			 
			  
			  <input type="submit" class="btn btn-default" name="submit" value="Submit"/>
			</form>
		</div>
