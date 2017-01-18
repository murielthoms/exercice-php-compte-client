<?php
require_once 'vegetable.php';
require_once 'cloth.php';

$vegetable1 = new Vegetable('Id1','Carotte','5€','Pérou','23-04-2017');
$vegetable2 = new Vegetable('Id2', 'Fraise', '3€','France','10-06-2016');

$cloth1 = new Cloth('Id3','Robe', '3O€', 'Zara');
$cloth2 = new Cloth('Id4','Jean','50€', 'Levis');
$cloth3 = new Cloth('Id5','Pull', '20€','Camaieu');

$tableau= [

$vegetable1,
$vegetable2,
$cloth1,
$cloth2,
$cloth3
];

// var_dump($tableau);
return $tableau;

?>