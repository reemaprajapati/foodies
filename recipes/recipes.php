<?php
$section="recipes";
$PageTitle="Recipes";
include('../inc/header.php');
include '../admin/includes/connection.php';
if(!$add=mysql_query("SELECT * FROM `recipe`")){
        echo mysql_error();
       }
       ?>

		<div class="container"> 
      <div="row">
        <h2>Recipes</h2>
          <div class="row">
            <?php
              while($ress=mysql_fetch_array($add)){
            ?>
              <div class="col-md-4">
                 <div class="thumbnail">
                    <img src="<?php echo $site_url;?>/recipe/<?php echo $ress['Image'];?>" alt="<?php echo $ress['Image'];?>" style=height:200px;width:299px;/>
                   <div class="caption">
                      <h3 style=color:brown;><?php echo $ress['Name'];?></h3>
                     
                      <a href="description.php?id=<?php echo $ress['Id'] ?>" class="btn btn-primary" role="button" >View Recipe</a> 
                   </div>
                 </div>
             </div>
             <?php }?>
          </div>
         <?php include('../inc/footer.php'); ?>
      </div>
    </div>
</body>
</html>
