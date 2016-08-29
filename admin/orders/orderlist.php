<?php
$section="order";
include '../includes/header.php';
include '../includes/connection.php';
if(isset($_REQUEST['del']) && $_REQUEST['del']=='yes'){
$id=$_REQUEST['id'];
$sql=("SELECT `Image` from `order` WHERE Id=$id");
if(!$res=mysql_query($sql)){
  mysql_error();
  die;
}
$row=mysql_fetch_array($res);
$query2=mysql_query("DELETE FROM `order` WHERE Id=$id");


if(!unlink("../../order/".$row['Image'])){
  echo mysql_error();
  die;
}

header('Location:orderlist.php');
}
?>  

 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <h1 class="page header"><a href="add.php">Add Item</a></h1>
      <div class="row">
        <div class="col-md-1">
         <h2>Id</h2>
        </div>
        <div class="col-md-2">
         <h2>Name</h2>
        </div> 
        <div class="col-md-3">
         <h2>Description</h2>
        </div>
        <div class="col-md-2">
         <h2>Image</h2>
        </div>
        <div class="col-md-1">
         <h2>Price</h2>
        </div>        
  </div>

        <?php
        include '../includes/connection.php';
       if(!$add=mysql_query("SELECT * FROM `order`")){
        echo mysql_error();
       }
        while($ress=mysql_fetch_array($add)){?>
          <div class="row">
          <div class="col-md-1">
           <h3><?php echo $ress['Id'];?> </h3>
          </div>
          <div class="col-md-2">
           <h3><?php echo $ress['Name'];?></h3>
          </div> 
          <div class="col-md-3">
           <h3><?php echo $ress['Description'];?></h3>
          </div>
          <div class="col-md-2">
           <h3><img src="<?php echo $site_url;?>/order/<?php echo $ress['Image'];?>"  style=height:30px;width:30px alt=""/></h3>
          </div>
          <div class="col-md-1">
           <h3><?php echo $ress['Price'];?></h3>
          </div>  
          <div class="col-md-1">
           <button class="btn btn-default" onclick="location.href='edit.php?id=<?php echo $ress['Id'] ?>'">Edit</button>
          </div> 
          <div>
          <a href="orderlist.php?id=<?php echo $ress['Id'] ?>&del=yes" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-default" ?>Delete</a></button>
          </div>       
        </div>

  
        <?php
        }
        ?>

    </div>


  </body>