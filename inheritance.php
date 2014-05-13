<?php

interface Emp{ public function sal();}
interface Driver {public function sal();}
interface Student {public function Absence();}



abstract class Person {
	
	private $name ;
	private $age ;
	private $gender ;
	private $address ;
	private $phone ;
	
	 public function __construct($name, $age ,$gender, $address, $phone) {
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
		$this->phone = $phone;
		$this->address = $address;
   }
   
   protected function noUse (){echo "no use because it protected";}
	
	abstract public function Hobby(); 
	
	
	
	
	}


class Manger extends Person implements Emp{
	public function Hobby()
	{echo "any thing";}
                        
						public function sal(){echo"";}                     



}
class Student extends Person implements Student{
	public function Hobby()
	{echo "any thing";}
	public function Absence(){echo"";}
	
	}
class Teacher extends Person implements Emp , Student{
	public function Hobby()
	{echo "any thing";}
	public function sal(){echo"";}
	public function Absence(){echo"";}
	
	}
class Driver extends person implements Driver{public function Hobby()
{echo "any thing";}
public function sal(){echo"";}
}

$Manger_ob = new Manger ('mohamed' ,30,'male','alex','01200099060');

$Student_ob = new student ('ahmed' ,31,'male','cairo','01090048638');

$Teacher_ob = new teacher ('rame' ,28,'male','tanta','01116461416');

$Driver_ob = new driver ('ali' ,22,'male','alex','035338831');
