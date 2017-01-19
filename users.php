<?php 
require_once 'client.php';

$client1= new Client('moi@gmail.dd', 'client1', date('d-m-Y', time()));
$client2= new Client('max@gmail.dd','client2',date('d-m-Y',time()));

$array=[
$client1,
$client2
];

return $array;
 ?>