<?php

class Conn {
	
	private $connect;
	private $insert;
	
	public function __construct($db_name, $user, $pass) {
		$this->connect = mysql_connect($db_name, $user, $pass) or die("Connection faild -- ". mysql_error());
	}
	
	public function __destruct() {
		mysql_close($this->connect);
		echo "connection closed";
	}
	
	public function selectDB($db_name) {
		mysql_select_db($db_name, $this->connect) or die ("NO DB by this Name -- ".   mysql_error());
	}
	
	public function insert($name,$address,$age){
	    $this->insert = "insert into users(name,address,age) value ('$name','$address','$age')";
 mysql_query($this->insert) or die ("ERROR" . mysql_error());
 if($this->insert){
	 echo "DATA INSERTED" ."<br>";
 }
	 	
}
}

 $obj = new conn ( 'localhost' , 'root' , '');
 $obj->selectDB('new');
 $obj->insert('5454','5454',5454);
 