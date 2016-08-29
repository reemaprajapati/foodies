<?php

include '../session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $site_url ='http://localhost:8080/foodies'; ?>
    <link rel="stylesheet" href="<?php echo $site_url;?>/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo $site_url;?>/css/bootstrap-theme.min.css" >
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script src="<?php echo $site_url;?>/js/jquery.min.js" ></script>
    <script src="<?php echo $site_url;?>/js/bootstrap.min.js" ></script>
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <script type="application/x-javascript">
tinymce.init({selector:'textarea'});
</script>
    <title>Dashboard for Foodies</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/admin/css/dashboard.css">
    </head>
    
    <body>
<div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Foodies</a>
          </div>
         
            <ul class="nav navbar-nav navbar-right">
             <li class="<?php if($section=="home"){ echo "active";} ?>"><a href="<?php echo $site_url;?>/admin/dashboard">Overview </a></li>
              <li class="<?php if($section=="order"){ echo "active";} ?>"><a href="<?php echo $site_url;?>/admin/orders/orderlist.php">Order</a></li>
              <li class="<?php if($section=="recipe"){ echo "active";} ?>"><a href="<?php echo $site_url;?>/admin/recipes/recipelist.php">Recipes</a></li>
              <li class="<?php if($section=="logout"){ echo "active";} ?>"><a href="<?php echo $site_url;?>/admin/logout.php">Logout</a></li>
            </ul>
            
          </div>
        </div>
      </nav>


     