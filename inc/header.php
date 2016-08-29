<!DOCTYPE html>
<html>
<head>
<?php $site_url ='http://localhost:8080/foodies'; ?>

<link rel="stylesheet" href="<?php echo $site_url;?>/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo $site_url;?>/css/bootstrap-theme.min.css" >
<script src="<?php echo $site_url;?>/js/bootstrap.min.js"  ></script>
<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/inc/style.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<title><?php echo $PageTitle?></title>
</head>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<body>
	<div class="container">
		
			<div class="row">

				<div class="col-mid-3">
						<a href="<?php echo $site_url; ?>/index.php"><img src="<?php echo $site_url;?>/image/navimg.jpg" alt="foodies" style=height:100px;width:200px;margin-top:50px;/></a>
						
				</div>
				<div class="col-mid-3 pull-right">
					<ul class="nav nav-pills" >
							<li role="presentation" class="<?php if($section=="home"){ echo "active";}?>"><a href="<?php echo $site_url;?>/index.php" class="navc">Home</a></li>
							<li role="presentation" class="<?php if($section=="order"){ echo "active";}?>" ><a href="<?php echo $site_url;?>/orders/order.php" class="navc">Order</a></li>
							<li role="presentation" class="<?php if($section=="recipes"){ echo "active";}?>"><a href="<?php echo $site_url;?>/recipes/recipes.php" class="navc">Recipes</a></li>
							<li role="presentation" class="<?php if($section=="contact"){ echo "active";}?>"><a href="<?php echo $site_url;?>/contact.php" class="navc">Contact Us</a></li>
							<li role="presentation" class="<?php if($section=="tray"){ echo "active";}?>"><a href="<?php echo $site_url;?>/orders/order.php?cart" class="navc">Tray<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span></a></li>

					</ul>
				</div>
	
			</div>
		</div>
	<!-------to-be-included-in-header---->
	
	