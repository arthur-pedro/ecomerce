<?php

	session_start();
	echo "<pre>";
	print_r($_SESSION['shoppingCart']);
	$_SESSION['qtd_produtos'] = 0;
	/*session_destroy();*/
?>