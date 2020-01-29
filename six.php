<?php
	include 'VarDumper.php';
	class Dog {
		public $hunger = 50;
		public $paws = 4;
		public $weight = 5;
		public $health = 100;
		public function eat() {
			if ($this->hunger <= 90){
				return $this->hunger = $this->hunger+10;
			}
			else{
				return $this->hunger = 100;
			}
		}
	}
	$dog1= new dog();
	VarDumper::dump($dog1,10,true);
	$dog1->eat();
	VarDumper::dump($dog1,10,true);
	$dog1->eat();
	$dog1->eat();
	$dog1->eat();
	$dog1->eat();
	VarDumper::dump($dog1,10,true);
	$dog2 = new dog();
	VarDumper::dump($dog2,10,true);
?>