<?php 


class A {
	private $podatoci = [];
	// public $ime;

	public function __set($name, $value){
		$this->podatoci[$name] = $value;
	}

	public function __get($name){
		return $this->podatoci[$name];
	}
}

$a = new A;
$a->ime = 'Pero';
$a->prezime = 'Perovski';

$a->ime = 'Goran';
$a->prezime = 'Goranovski';

// echo $a->ime;
// print_r($a);



class B {
	private $ime;

	public function setIme($i){
		$this->ime = $i;
	}

	public function __get($key){
		return $this->$key;
		// return $this->ime;
	}
}


$b = new B;
// $b->ime = 'Bojan';
$b->setIme('Bojan');
// echo $b->ime;


// print_r($b);





$c = 'pero';
$pero = 'G';
$$c = 'H';
// echo $pero;






class C {

	public function __call($method, $attributes){
		echo "<br/>Kako Vardaaaaar kje dotecham.. Tra la la.. $method";
	}
}




$c = new C;
// $c->sing();
// $c->play();
// $c->dance();
// $c->start();
// $c->end();



class D {

	public function __call($method, $attributes){
		echo "Method: $method, Attributes: ".implode(', ', $attributes);
	}
}


// $d = new D;

// $d->jadi('Pizza', 'Burger', 'Burek');
// echo '<br/>';
// $d->setStudent('Bojan', 'Gavrovski', 3, 7.2);
// echo '<br/>';
// $d->pej('Kako Vardaaaaar...');


class E {
	private function pej1(){
		echo 'Somebody once told me the world is gonna b***w me!';
	}

	private function pej2($pesna){
		echo $pesna;
	}

	public function __call($method, $arguments){

		if($method == 'pej' && count($arguments) == 0){
			$this->pej1();
		}else if($method == 'pej' && count($arguments) == 1){
			$this->pej2($arguments[0]);
		}
	}
}


$e = new E;
$e->pej();
echo '<br/>';
$e->pej('Tra la la la la la la...');



?>