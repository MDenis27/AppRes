<?php

class person{

	private $name;
	private $firstname;
	private $age;

	public function __construct(){
		$this->name = "";
		$this->firstname = "";
		$this->age = 0;
	}

	public function getName(){
		return $this->name;
	}

	public function getFirstname(){
		return $this->firstname;
	}

	public function getAge(){
		return $this->age;
	}

	public function setPerson($name, $firstname, $age){
		$this->name = $name;
		$this->firstname = $firstname;
		$this->age = $age;
	}
}
?>