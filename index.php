<?php
$section="home";
$PageTitle="Welcome to Foodies";
include 'inc/header.php';
?>

	<div class="container">	
		<div class="row">
			<div class="col-md-7">
				<h3> Part of secret of success in life is to eat what you like and let the food fight it out inside.</h3>
				<h3>There is no love sincerer than the love of food.</h3>
				<h3>Let food be thy medicine and medicine be thy food.</h3>
						<div class="btn-group" role="group" aria-label="...">
 						 <a class="btn btn-default hbtn" href="<?php echo $site_url; ?>/orders/order.php">Order Now</a>
 						</div>
 						<p style=color:orange;> *CASH ON DELIVERY* </p>
 			</div>				
			<div class="col-md-5">
					<img src="image/homemomo.jpg" style=height:250px;width=200px;margin-top:30px;margin-bottom:30px/>
			</div>

		</div>

			<div class="row">
				<div class="col-md-7">
					<h2><strong>Place you order. . .</strong></h2>
					<p>Search, Click and Boom! your food is at your doorstep!</p>
					<img src="image/homenewari.jpg" style=height:510px;width:650px;/>
				</div>
				<div class="col-md-5">
					<p style=margin-top:20px;>Know the recipes of your favorite food and try yourself at home!</p>
					<img src="image/homepizza.jpg" style=height:240px;width:350px;/>
					<img src="image/homeice.jpg" style=width:350px;/>
				</div>
			</div>

		</div>
		<?php include('inc/footer.php'); ?>

</body>
</html>