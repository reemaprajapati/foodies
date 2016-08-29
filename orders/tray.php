<?php
$PageTitle="Your Tray";
$section="tray";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Shopping Tray</title>
		<style>
				table {
				border-collapse: collapse;
				}
				td, th {
				border: 3px solid brown;
				}
		</style>
		</head>
<body>
	<div class="container">
		 
		<h2><p>Your Shopping Tray<p></h2>
			<?php
				if (count($cart) > 0): ?>
		<table>
			<div class="col-md-offset-4 col-sm-6">
			<thead>
				<tr>
				<th><h3>Item Description</h3></th>
				<th><h3>Price</h3></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($cart as $item): ?>
				<tr>
				<td><?php echo '<h3>'.$item['Name'].'</h3>'; ?></td>
				<td>
				<?php echo '<h3>'.number_format($item['Price'], 2).'</h3>'; ?>
				</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
						<td><h3>Total:</h3></td>
						<td><?php echo '<h3>'.number_format($total, 2).'</h3>'; ?></td>
						</tr>
					</tfoot>
		
		</table>
		<?php



		?>
		<p style=color:orange;font-size:1em;>*The total is without delivery charges*</p>
			<?php else: ?>
			<p>Your tray is empty!</p>
			<?php endif; ?>


					<form action="" method="post">
					<p>
					<a href="order.php">Continue Ordering</a> or
					<input type="submit"  style=color:brown name="action" value="Empty Tray">
					</p>


			</form>
		</div>

		
		<?php
		if(!count($cart)==0){
				include 'ordernow.php';
	    }
	   
		?>

</div>

</body>
</html>

