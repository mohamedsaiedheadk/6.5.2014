<?php
   class person {
   
        public $name;
		 
		public $address = "Alex";
		
		public function test() {
			echo "W";
		}
		
		public function getName() {
		  return $this->name;
		}
   }
   
   $a = new person();
   
   $b = new person();
   
   $a->name = "AA";
   echo $a->name;
   echo "<br>";
   echo $a->address;
   echo "<br>";
   echo $b->address;
   echo "<br>";
   $b->name = "B";
   
   echo $b->name;
   echo "<br>";
   $c = $a;
   echo $c->name.'123';
   echo "<br>";
   $c->name = "C";
   echo $a->name;
   echo "<br>";
   $b->test();
   echo "<br>";
   echo $a->getName();
   