<?php
require'products.php';

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

	
</tr>

<?php foreach ($tableau as $key):?>
	
<tr>
<td><?=$key->getId();?></td>
<td><?=$key->getName();?></td>
<td><?=$key->getPrice();?></td>
<td><?=$key->getProductorName();?></td>
<td><?=$key->setHarvestedAt();?></td>
	
</tr>
<?php endforeach ?>

</table>
	
</body>
</html>