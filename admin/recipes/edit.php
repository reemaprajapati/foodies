<?php
$section="recipe";
include '../includes/header.php';
include '../includes/connection.php';	
$id=$_REQUEST['id'];
$query1=mysql_query("SELECT * FROM `recipe` WHERE Id=$id" );

$ress=mysql_fetch_array($query1);

?>

<?php 
	if(isset($_POST['submit']) AND $_POST['submit']=="Submit"){
		$Name=$_POST['Name'];
		$Description=$_POST['Description'];
		$filename = $_FILES['Image']['name'];
		$source=$_FILES['Image']['tmp_name'];
				$target_path="../../recipe/".$_FILES['Image']['name'];
		if($filename==""){
			$filename=$_POST['DImage'];
					}
		mysql_query("UPDATE `recipe` SET Name = '$Name', Description ='$Description', Image='$filename' WHERE Id = $id");

		move_uploaded_file($source, $target_path);
		header('Location:recipelist.php');		
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
			    <textarea id="TypeHere" name="Description"><?php echo $ress['Description'];?></textarea>
			  </div>
			  <div class="form-group">
			    <label for="Image">Image</label>
			    <input type="file" name="Image" /><img src="<?php echo $site_url;?>/order/<?php echo $ress['Image'];?>"  style=height:30px;width:30px alt=""/>
			    <input type="hidden" name="DImage" value="<?php echo $ress['Image'];?>"/>
			   </div>
			    <input type="submit" class="btn btn-default" name="submit" value="Submit"/>
			</form>
		</div>
					