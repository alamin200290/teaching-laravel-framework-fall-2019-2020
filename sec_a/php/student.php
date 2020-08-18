<?php

class Student
{
	//prop
	private $name;
	private $id;
	private $cgpa;

	//constructor
	function __construct($name="", $id="", $cgpa=0){
		$this->name = $name;
		$this->id = $id;
		$this->cgpa = $cgpa;
	}

	//getter-setter

	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

	function getId(){
		return $this->id;
	}

	function setId($id){
		$this->id = $id;
	}

	//method-action
	function printDetails(){
		return "StdName: ".$this->name."<br> StdID: ".$this->id;
	}
}
