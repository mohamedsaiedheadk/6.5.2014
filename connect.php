<?php
$conn = mysql_connect("localhost", "root", "") or die("Connection faild -- ". mysql_error());


 
 $db = mysql_select_db("new", $conn) or die ("NO DB by this Name -- ". mysql_error());


















?>