<?php
$section="recipes";
$PageTitle="Description";
include '../inc/header.php';
include '../admin/includes/connection.php';
$id=$_REQUEST['id'];
$query1=mysql_query("SELECT * FROM `recipe` WHERE Id=$id" );
$ress=mysql_fetch_array($query1);

?>

<div class="container"> 
  <div class="row">
    <h2><?php echo $ress['Name'];?></h2>
  </div>
  <div class="row">
  	<div class="col-md-9">
  		<img src="<?php echo $site_url;?>/recipe/<?php echo $ress['Image'];?>" style=height:300px;width:500px;/>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-7">
    	<h5><?php echo $ress['Description'];?></h5>
	   </div>
  </div>
<?php 
include '../inc/footer.php' ?>
