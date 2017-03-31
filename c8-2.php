<?php 

class A {
	protected $ime = 'Bojan';
}

class B extends A {
	public $prezime = 'Gavrovski';

	public function setIme($ime){
		$this->ime = $ime;
	}
}

$o = new B;
// $o->ime = 'Pero';
$o->setIme('Pero');
// print_r($o);

class C extends B {

}

$c = new C;
$c->setIme('Janko');
print_r($c);


?>