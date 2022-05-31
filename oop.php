<?php
	class Person{
		private $name;
		private $email;
		private static $ageLimit=40;


		public function __construct($name, $email){
			$this->name=$name;
			$this->email=$email;
			echo __CLASS__.' created<br>';
		}

		public function __destruct(){
			echo __CLASS__.' destroyed<br>';
		}

 		public function setName($name){
			$this->name =$name;
		}

		public function getName(){
			return $this ->name;
		}
		public function setEmail($email){
			$this->email=$email;
		}

		public function getEmail(){
			return $this->email;
		}

		public static function getAgeLimit(){
			return self::$ageLimit;
		}
	}

	echo Person::getAgeLimit();
	//$person1= new Person('John Doe', 'jdoe@gmail.com');

	//$person1->setName('John Doe');
	//echo $person1->getEmail().'<br>';
	//$person1 -> name ='John Doe';
	//echo $person1->name;

	class Customer extends Person{
		private $balance;

		public function __construct($name, $email, $balance){
			parent::__construct($name, $email, $balance);
			$this->balance=$balance;
			echo 'A new '.__CLASS__.' has been created.<br>';
		}

		public function setBalance($balance){
			$this->balance=$balance;
		}

		public function getBalance(){
			return $this->balance.'<br>';
		}

	}
	//echo Person::$ageLimit;

	//$customer1= new Customer('John Doe', 'jdoe@gmail.com', 300);
	//echo $customer1->getBalance();

?>