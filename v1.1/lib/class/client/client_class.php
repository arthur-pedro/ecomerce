<?php

	class Client {

		private $name;
		private $email;
		private $password;

		/*construtor*/
		// public function usuario($name, $email, $senha) {
		//     $this->setNome($nome);
		//     $this->setEmail($email);
		//     $this->setSenha($senha);
		//  }

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}	

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}	

		public function getPassword(){
			return $this->password;
		}

		public function setPassword($password){
			$this->password = $password;
		}	
	}

?>