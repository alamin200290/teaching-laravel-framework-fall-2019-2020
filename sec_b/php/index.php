<?php
	
	//echo "it works..";
	
	//$name = "abc";
/*
	function sum ($a=0, $b=0){
		return $a+$b;
	}*/
//	echo sum(10);

	//$a  = array(4);
	//$b  = [4];

/*	$std = [
			'id'=>'12-21111-2', 
			'name'=>'test', 
			'cgpa'=>4
		];*/

	/*$std = array(
		'id'=>'12-21111-2', 
		'name'=>'test', 
		'cgpa'=>4
	);*/

	/*$c = array(
			array('10','java','3.45'),
			array('11','atp','2.5'),
			array('12','web','4')
		);
*/
/*
		$db = [
			'mysql'=> [
				'server'=>'localhost', 
				'dbname'=>'test', 
				'user'=>'root'
			],
			'sqlserver'=>[
				'server'=>'localhost', 
				'dbname'=>'abc', 
				'user'=>'abctest'
			]
		];

//	echo $db['mysql']['server'];
*/

 class Student{

	//prop
	private $name;
	private $cgpa;

	//constructor

	function __construct($name="alamin", $cgpa="1"){
		$this->name = $name;
		$this->cgpa = $cgpa;
	}

	//getter-setter	
	function setName($name){
		$this->name = $name;
	}

	function getName(){
		return $this->name;
	}

	//method
	function abstruct printDetails();
}

class CSStudent extends Student {
	private $dept;

	function __construct(){
		parent::__construct('test', '5');
	}

	function setDept($dept){
		$this->dept = $dept;
	}

}

$csStd = new CSStudent();

echo $csStd->printDetails();








