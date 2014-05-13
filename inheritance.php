<?php



interface Emp{ public function sal();}
interface ForDriver {public function sal();}
interface ForStudent {public function Absence();}



abstract class Person {
	
	private $name ;
	private $yeareOfBirth ;
	private $gender ;
	private $address ;
	private $phone ;
	
	 public function __construct($name, $yearOfBirth ,$gender, $address, $phone) {
		$this->name = $name;
		$this->yearOfBirth = $yearOfBirth;
		$this->gender = $gender;
		$this->phone = $phone;
		$this->address = $address;
   }
   
   protected function noUse (){echo "no use because it protected";}
	
	abstract public function Hobby(); 
	
	//public function date(){return date ; }
	
	//public function getDate(){return "YOUR AGE IS : " . $this->date() -  $yearOfBirth ;}
	
	
	
	
	}


class Manger extends Person implements Emp{
	
	public function Hobby()
	{echo "any thing";}
                        
						public function sal(){echo" YOUR SAL IS :";}
						                    
}


class Student extends Person implements ForStudent{
	public function Hobby()
	{echo "any thing";}
	
	public function Absence(){echo"";}
	
	}
	
	
	
class Teacher extends Person implements Emp , ForStudent{
	public function Hobby()
	{echo "any thing";}
	public function sal(){echo"";}
	public function Absence(){echo"";}
		
	}
class Driver extends person implements ForDriver{public function Hobby()
{echo "any thing";}
public function sal(){echo"";}
}

$Manger_ob = new Manger ('mohamed' ,1980,'male','alex','01200099060');
//echo $Manger_ob ->getDate();

$Student_ob = new student ('ahmed' ,1985,'male','cairo','01090048638');

$Teacher_ob = new teacher ('rame' ,1990,'male','tanta','01116461416');

$Driver_ob = new driver ('ali' ,2000,'male','alex','5400258');
