<?php

	class Usuario {

		private $nome;
		private $email;
		private $senha;

		/*construtor*/
		public function Usuario($name, $email, $senha) {
		    $this->setNome($nome);
		    $this->setEmail($email);
		    $this->setSenha($senha);
		 }

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			return $this->nome = $nome;
		}	

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			return $this->email = $email;
		}	

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			return $this->senha = $senha;
		}	
	}
?>