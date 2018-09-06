

function att_pagina(){
	location.reload();
	$('html,body').scrollTop(0);
}

/*coloca na tela a qtd de itens do carrinho*/
function contItem(){

}

function add_carrinho(produto){
	if(produto != null){

	$.ajax({
		url: "asset/php/addItem.php", 
		type: "post",
		data: "product=" + produto,

		success: function(cb){
			if(cb == "alreadyInserted"){
				alert("Item ja adicionado");
			}else if(cb == "itemInserted"){
				alert("Item adicionado com sucesso");
			}else{
				alert("error >>" + cb);
			}
		}
	});
		
	}else{
		alert("produto null");
	}
}



