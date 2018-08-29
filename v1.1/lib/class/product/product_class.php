<?php
	class Product{

		private $name;
		private $price;
		private $description;

		public function getName(){
			return $this->nome;
		}

		public function setName($name){
			$this->nome = $nome;
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