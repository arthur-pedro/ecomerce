

function add_carrinho(produto){
	// alert("ok");
	
	if(produto != null){

	$.ajax({
		url: "php/add_carrinho.php", 
		type: "post",
		data: "product=" + produto,
		success: function(){
			// location.reload();
		}
	});
		
	}else{
		alert("produto null");
	}
}

function limpar_carrinho(){
	
	$.ajax({
		url: "php/limpar_carrinho.php",
		success: function(){
			att_pagina();	
		}
	});
}

function att_pagina(){
	location.reload();
}