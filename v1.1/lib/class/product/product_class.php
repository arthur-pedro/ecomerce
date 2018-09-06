<?php
	class Product{

		private $name;
		private $price;
		private $description;

		public function __construct($name, $price, $description){
			$this->name = $name;
			$this->price = $price;
			$this->description = $description;
		}

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getPrice(){
			return $this->price;
		}

		public function setPreco($price){
			$this->price = $price;
		}

		public function getDescription(){
			return $this->description;
		}

		public function setDescricao($description){
			$this->description = $description;
		}
	}
?>