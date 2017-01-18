<?php 

require'users.php';


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
			<th>ID</th>
			<th>Email</th>
			<th>Date</th>
		</tr>
		
		<?php foreach ($array as $key):?>

		<tr>
			<td><?= $key->getId();?></td>
			<td><?= $key->getEmail();?></td>
			<td><?= $key->getCreatedAt();?></td>
		</tr>
		<?php endforeach ?>
	</table>


</body>
</html>