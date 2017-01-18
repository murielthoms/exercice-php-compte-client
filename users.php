<?php 
require 'client.php';

$client1= new Client('moi@gmail.dd', 'client1', date(DATE_RFC2822));
$client2= new Client('max@gmail.dd','client2',date(DATE_RFC2822));

$array=[
$client1,
$client2
];

return $array;
 ?>