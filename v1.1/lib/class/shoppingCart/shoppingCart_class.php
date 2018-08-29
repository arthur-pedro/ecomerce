<?php
	
	class ShoppingCart{

		private $product;
		private $Client;
		private $TotalPrice;

		private function getProduct(){
			return $this->product;
		}

		private function setProduct(Product $product){
			$this->product = $product;
		}

		private function getClient(){
			return $this->client;
		}

		private function setProduct(Client $product){
			$this->client = $client;
		}

		private function getTotalPrice(){
			return $this->totalPrice;
		}

		private function setTotalPrice($totalPrice){
			$this->totalPrice = $totalPrice;
		} 
	}
?>