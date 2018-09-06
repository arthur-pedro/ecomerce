<?php

	class Util{

		private $conexao;
		private $user;
		private $product;
		private $shoppingCart;


		/*chama uma classe de outro arquivo php*/
		public function callClassByFolderName($className){
			$path = 'C:/Program Files/NetMake/v9/wwwroot/ecomerce/v1.1/lib/class/';
			require_once($path . $className . '/' . $className . '_class.php');
		}

		public function autoLoadClass(){
			spl_autoload_register(function ($class_name) {
 			$path = 'C:/Program Files/NetMake/v9/wwwroot/ecomerce/v1.1/lib/class/';
		    	include $path . strtolower($class_name) . '/' . strtolower($class_name) . '_class.php';
			});
		}
		/*retorna true se o usuario esta logadoUsiario*/
		public function isLogged(Client $client){
			return true;
		}


		public function authenticationUser($email, $password){

			$this->email = $email;
			$this->password = $password;

			if(!isset($email) || !isset($password) || $this->email == '' || $this->password == ''){
				echo "nullField";
			}
			else if($this->emailExist($email)){
				echo "logged";
			}else{
				echo "nullRegister";
			}

		}

		/*retorna true se o email é válido*/
		public function emailExist($email){
			
			$this->callClassByFolderName('connectionMYSQL');

			if(isset($email))
				
				$query_emailExist = "SELECT email_usuario FROM usuarios WHERE email_usuario = '$email'";

				$conexao = new MyDatabase();
				$conn = $conexao->connectPDO();
				
				if($conn->query($query_emailExist)){
					$result = $conn->query($query_emailExist);
					if($result->rowCount() == 1){
						return true;
					}else{
						return false;
					}
				}
		}

		/*retorna true se o usuario for admin*/
		public function isAdm($email){
			
			$this->callClassByFolderName('connectionMYSQL');

			$query_isAdm = "SELECT  `email_usuario`, `adm` FROM `usuarios` WHERE `email_usuario` = '$email'";
			$conexao = new MyDatabase();
			$conn = $conexao->connectPDO();
			$stmt = $conn->prepare($query_isAdm);

			if(!$stmt->execute()){
			    echo '<pre>';
			    print_r($stmt->errorInfo());
			}else{
				$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
				if($resultado['adm'] == true){
					return true;
				}
				return false;
			}
		}
		/*cria usuario na base*/
		public function createUser($nome_usuario, $email_usuario, $senha_usuario){
			
			$this->callClassByFolderName('connectionMYSQL');

			if(isset($email_usuario) && isset($email_usuario) && isset($senha_usuario))
				if($this->emailExist($email_usuario) == false){

					$query_insertUser = "INSERT INTO usuarios (`nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario')";
					$conexao = new MyDatabase();
					$conn = $conexao->connectPDO();
					$result = $conn->query($query_insertUser);
					echo "userCreated";	
				}
		}

		// deleta usuario na base
		public function deleteUser($email){

			if($this->emailExist($email)){

				$this->callClassByFolderName('connectionMYSQL');
				
				$queryDeletUser = "DELETE FROM `usuarios` WHERE email_usuario = '$email'";
				$conexao = new MyDatabase();
				$conn = $conexao->connectPDO();
				$result = $conn->query($queryDeletUser);
				echo "userDeleted";	

			}else{
				echo 'impossibleRemove';
			}
		}
		/*adiciona item no carrinho*/
		public function addItem(Object $ShoppingCart, Object $Product){

		}
		/*remove item do carrinho*/
		public function removeItem(){
			
		}
	}

	/*$utilClass = new Util();
	$utilClass->isAdm('arthurpedroweb@gmail.com');*/
	
?>