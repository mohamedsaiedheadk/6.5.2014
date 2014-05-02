<?php
 include('connect.php');

if(isset($_POST['name'],$_POST['address'],$_POST['age']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];	
	
	}
	class person{
	public $name;
	public $address;
	public $age;
	public function twostring(){
		echo $name;
		echo $address;
		echo $age;
		
		}
	}
	$p= new person();
	$p-> name = $name;
 	$p-> address = $_POST['address'];
$p-> age = $_POST['age'];
$p2= new person();
$p2-> name = $p ->name;
$p2-> address = $p ->address;
$p2-> age = $p -> age+2 ;


echo $p-> age;
echo "<br>" ;
echo $p2-> age;


$i = 5;
$a = $i+2;
echo $a;



?>