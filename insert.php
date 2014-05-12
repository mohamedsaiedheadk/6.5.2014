
<?php


echo date("l") . "<br>";

include('connect.php');
include('class.php');

if(isset($_POST['name'], $_POST['address'], $_POST['age']) && !empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['age']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];	

$q_insert = "insert into users(name,address,age) value ('$name','$address','$age')";
$q = mysql_query($q_insert) or die ("ERROR" . mysql_error());


if($q){
	 
	echo "DATA IS INSERTED <br> <br> <a href ='form.php'> GO BACK TO FORM </a>"; 
	
	}
	else{echo'ERROR';}





	$p= new person();
	$p-> name = $name;
 	$p-> address = $_POST['address'];
$p-> age = $_POST['age'];
$p2= new person();
$p2-> name = $p ->name;
$p2-> address = $p ->address;
$p2-> age = $p ->age+2 ;




echo "<hr>"; 

echo $p-> twostring();
echo $p2-> twostring();

$sq_insert2 = "insert into ob (name,address,age) value ('$p->name','$p->address','$p->age')";
$q2 = mysql_query($sq_insert2)or die("ERROR INSERT TO OB TABLE:"."<br>" . mysql_error());
}

?>

</body>