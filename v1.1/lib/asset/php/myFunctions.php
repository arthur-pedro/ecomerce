<?php

function calcula_preco(){
        
    require("conexao_mysql.php");
    /*$conexao = new MyDatabase();
    $conn = $conexao->connect();*/
	    
    $total_preco = 0;

    if(isset($_SESSION['query_carrinho'])){
    	foreach ($_SESSION['query_carrinho'] as $key) {
	        $result = $conn->query($key);
	        while ($row = $result->fetch_assoc()) {
	            $total_preco = $total_preco + $row['preco'];
	        }
				
    	}
    	return $total_preco;
    }else{
    	return 0.00;
    }
}
    
	
?>