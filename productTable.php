<?php
require_once'products.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<table>
		<tr>

			<th>Id</th>
			<th>Nom</th>
			<th>Prix</th>
			<th>Producteur</th>
			<th>Date récolte</th>
			<th>Marque</th>

		</tr>

		<?php foreach ($tableau as $key):?>

			<tr>
				<td><?=$key->getId();?></td>
				<td><?=$key->getName();?></td>
				<td><?=$key->getPrice();?></td>
				<td><?=(method_exists($key, 'getProductorName'))? $key->getProductorName():"";?></td>
				<td><?=(method_exists($key, 'getHarvestedAt'))?$key->getHarvestedAt():"";?></td>
				<td><?=(method_exists($key, 'getBrand'))?$key->getBrand():"";?></td>

			</tr>
		<?php endforeach ?>

	</table>
	
</body>
</html>