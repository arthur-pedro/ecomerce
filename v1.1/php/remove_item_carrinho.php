<?php
	
	session_start();
	// echo $_POST['item'];

	// $item = $_POST['btn_remove_item'];

	$item = "Cartão visita";

	$newArr = array();

	foreach ($_SESSION['array_item_carrinho'] as $key => $v) {
		//echo $key;
		if($v != $item){
			
			$newArr[] = $item;
			//array_push($newArr, $item);
			// echo 'ok - removido';
		}

	}

	echo '<pre>';
	echo var_dump($newArr);
	echo '</pre>';
?>