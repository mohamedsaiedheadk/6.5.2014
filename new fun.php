<?php

class circle{

		public function __destruct(){echo"destroy circle";} 
		
public function __construct($par){
		
		echo "creat is done". $par;}


}

new circle("hello");