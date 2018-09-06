<?php

class ShoppingCart{

	private $product;
	private $totalPrice;
	private $Client;
	private $qtd_item;
	 
	public function debug(){
		session_start();
		
/*
 		spl_autoload_register(function ($class_name) {
 			$path = 'C:/Program Files/NetMake/v9/wwwroot/ecomerce/v1.1/lib/class/';
		    include $path . strtolower($class_name) . '/' . strtolower($class_name) . '_class.php';
		});
*/		/*$test = array_shift($_SESSION['shoppingCart']);*/
		/*echo var_dump($_SESSION['shoppingCart']);*/
		/*foreach ($_SESSION['shoppingCart'] as $key => $item) {
        */    // inicio do html
        echo '<pre>';
       
		/*$obj = unserialize($item);*/
        print_r($_SESSION['shoppingCart']);
            // fim do html
        /*}*/
        session_destroy();
	}

	public function addItem($item){
		
		session_start();

		if($_SESSION['qtd_produtos'] == 0){
			$_SESSION['shoppingCart'][] = '';
			array_shift($_SESSION['shoppingCart']);	
		}
		
		if(!in_array(serialize($item),$_SESSION['shoppingCart'])){
			$_SESSION['shoppingCart'][] = serialize($item);
			$_SESSION['qtd_produtos'] = $_SESSION['qtd_produtos'] + 1;
			echo "itemInserted";
		}else{
			echo "alreadyInserted";
			/*print_r($_SESSION['shoppingCart']);*/
		}
		/*session_destroy();*/
	}

	public function removeItem($item){

	}

	public function totalPrice(){
		
	}

	public function getProduct(){
		return $this->product;
	}

	public function setProduct(Product $product){
		$this->product = $product;
	}

	public function getClient(){
		return $this->client;
	}

	/*private function setProduct(Client $product){
		$this->client = $client;
	}*/

	public function getTotalPrice(){
		return $this->totalPrice;
	}

	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
	} 
}

	/*$shoppingCart = new ShoppingCart();
	$shoppingCart->debug();*/
?>