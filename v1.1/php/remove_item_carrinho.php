<?php
	
	session_start();
	// echo $_POST['item'];
	if(isset($_POST['btn_remove_item']))
		/*$item = "Cartão visita";*/
		foreach ($_SESSION['array_item_carrinho'] as $key => $v) {
			//echo $key;
			if($v == $_POST['btn_remove_item']){
				
				unset($_SESSION['array_item_carrinho'][$key]);
				unset($_SESSION['carrinho'][$key]);
				unset($_SESSION['query_carrinho'][$key]);
				$_SESSION['qtd_produtos']--;
				//array_push($newArr, $item);
				// echo 'ok - removido';
			}

		}
	else
		echo 'btn-remove-item null (normal)';
	
	echo '<pre>';
	/*echo var_dump($newArr);*/
	echo var_dump($_SESSION['array_item_carrinho']);
	echo '</pre>';


	echo '<pre>';
	/*echo var_dump($newArr);*/
	echo var_dump($_SESSION['carrinho']);
	echo '</pre>';


	echo '<pre>';
	/*echo var_dump($newArr);*/
	echo var_dump($_SESSION['query_carrinho']);
	echo '</pre>';
?>