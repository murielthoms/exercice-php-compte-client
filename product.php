<?php

class Product{

	private $id;
	private $name;
	private $price;

	public function __construct($bId,$nom,$prix){

		$this->setId($bId);
		$this->setName($nom);
		$this->setPrice($prix);
	}

	public function getId(){
		return $this->id;
	}
	public function setId($bId){
		$this->id=$bId;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($nom){
		$this->name=$nom;
	}
	public function getPrice(){
		return $this->price;
	}
	public function setPrice($prix){
		$this->price=$prix;
	} 

}


?>