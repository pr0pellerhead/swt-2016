<?php 

class Student {
	// properties - особини
	public $age;
	public $height;
	public $gender;
	public $weight;
	public $name;
	public $address;
	public $studentId;

	// methods - акции
	public function learn(){
		echo 'The student '.$this->name.' is learning';
	}

	public function sleep(){
		echo 'The student is sleeping';
	}

	public function practice(){
		echo 'The student is practicing';
	}

	public function takeExam(){
		echo 'The student is taking exam';
	}

	public function takeLecture(){
		echo 'The student is taking lecture';
	}
}


// $studentOne = new Student;
// $studentOne->age = 35;
// $studentOne->height = 182;
// $studentOne->gender = 'm';
// $studentOne->weight = 90;
// $studentOne->name = 'Bojan Gavrovski';
// $studentOne->address = 'Pero Nakov BB';
// $studentOne->studentId = 'x9e6t201enx762916ex20';

// $studentOne->learn();
// $studentOne->sleep();
// $studentOne->practice();
// $studentOne->takeExam();
// $studentOne->takeLecture();

// print_r($studentOne);


// $student = new Student;
// $student->name = 'Bojan Gavrovski';
// $student->learn();

// $studentThree = new Student;
// $studentThree->name = 'Pero Perovski';
// $studentThree->learn();


class Calculator {
	private $a;
	private $b;

	public function __construct($inputA, $inputB){
		$this->setA($inputA);
		$this->setB($inputB);
	}

	public function setA($input){
		if(is_numeric($input)){
			$this->a = $input;
		} else {
			echo 'Please enter a number for A';
		}
	}

	public function setB($input){
		if(is_numeric($input)){
			$this->b = $input;
		} else {
			echo 'Please enter a number for B';
		}
	}

	public function add(){
		echo $this->a + $this->b;
	}

	public function substract(){
		echo $this->a - $this->b;
	}

	public function multiply(){
		echo $this->a * $this->b;
	}

	public function divide(){
		echo $this->a / $this->b;
	}

	public function __destruct(){
		echo 'Calling the D.E.S.T.R.U.C.T.O.R. !!!';
	}
}

$c = new Calculator(4, 19);
// $c->a = 3;
// $c->b = 'asd';
// $c->setA(3);
// $c->setB(6);
echo '<br/>';
$c->multiply();
echo '<br/>';
unset($c);
echo '<br/>';
echo 'Kraj!';
echo '<br/>';




?>