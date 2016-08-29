<!DOCTYPE HTML>
  <html>
  <body>

		<div class="container">	
			<div="row">
      <p>Your Tray contains <?php echo count($_SESSION['cart']); ?> items.<a href="order.php?cart">View your Tray</a></p>
				<h2>Today's Menu</h2>
					<div class="row">
            <?php

              while($ress=mysql_fetch_array($add)){

               ?>
  						<div class="col-md-4">
   							 <div class="thumbnail">
      							<img src="<?php echo $site_url;?>/order/<?php echo $ress['Image'];?>" alt="<?php echo $ress['Image'];?>" style=height:200px;width:299px;/>
     							 <div class="caption">
       								<h3 style=color:brown;><?php echo $ress['Name'];?></h3>
       							  <h5 style=color:brown;><?php echo $ress['Description'];?></p>
                      <h4><?php echo "NRs"."&nbsp;".number_format($ress['Price']);?></h4>
        							
                     
                      <form action="" method="post">
                            <div>
                            <input type="hidden" name="id" value="<?php
                            echo $ress['Id']; ?>">
                           
                            <input type="submit"  name="action" class="btn btn-primary" role="button" value="Add to Tray" ></a>
                            
                             </div>
                            </form>
                         
     							 </div>
   							 </div>
 						 </div>
             <?php } ?>
					</div>
			   <?php include('../inc/footer.php'); ?>
      </div>
		</div>
</body>
</html>