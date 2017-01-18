<?php 
class User{
	private $email; 
	private $id;
	private $createdAt;

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($mail){
		$this->email=$mail;
	}
	public function getId(){
		return $this->id;

	}
	public function setId($nId){
		$this ->id=$nId;
	}

	public function getCreatedAt(){
		return $this->createdAt;
	}
	public function setCreatedAt($date){
		$this->createdAt=$date;
	}

}


?>