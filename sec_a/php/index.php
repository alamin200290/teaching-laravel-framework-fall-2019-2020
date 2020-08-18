<?php

//echo "it works...";
	
//$a=0;

/*function sum($a=0, $b=0){

	return $a+$b;
}
echo sum();
*/

//$std = array(5);
//$std = [5];
//$std = ['id'=>'12-12233-2', 'name'=>'test', 'cgpa'=>3.5];
//echo $std['cgpa'];

/*$stds= array(
			's1'=>array(
				'id'=>'12-21222-1', 
				'name'=>'abc', 
				'cgpa'=>3.5
			),
			's2'=>array(
				'id'=>'12-21222-2', 
				'name'=>'xyz', 
				'cgpa'=>3.3
			),
			's3'=>array(
				'id'=>'12-21222-3', 
				'name'=>'pgr', 
				'cgpa'=>3.2
			)
		);*/
//echo $stds['s3']['name'];

/*$db = [
		'mysql'=>[
			'server'=>'localhost',
			'user'=> 'root',
			'password'=>'',
			'database'=>'atp3'
		],
		'sqlserver'=>[
			'server'=>'localhost',
			'user'=> 'test',
			'password'=>'',
			'database'=>'atp2'
		]
];*/

/*echo $db['mysql']['server'];
echo $db['mysql']['user'];
echo $db['mysql']['password'];
echo $db['mysql']['database'];
*/


include('student.php');

class CSStudent extends Student{

	private $dept = "CSE";

	function __construct(){
		parent::__construct('PQR', 'alamin200290', 4);
	}

	function printDetails(){
		return "StdName: ".$this->getName()."<br> StdID: ".$this->getId()."<br> Dept: ".$this->dept;
	}
}


$cs1 = new CSStudent();
echo $cs1->printDetails();












