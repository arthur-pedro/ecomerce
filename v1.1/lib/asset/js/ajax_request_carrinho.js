
function att_pagina(){
	location.reload();
	$('html,body').scrollTop(0);
}

function add_carrinho(produto){
	
	if(produto != null){

	$.ajax({
		url: "../../lib/asset/php/add_carrinho.php", 
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


function enviar_email(){


		jQuery('#form-enviar-pedido').submit(function(){

		var dados = jQuery(this).serialize();

		$.ajax({
			url: "../../lib/asset/php/enviar_pedido.php",
			type: "post",
			data: dados,
			beforeSend: function(){
			
	        	$('#modal-title').html('Enviando email...');
	        	$('#notificacao').html('<div class="row"><div class="col-md-4"></div><div class="col-md-4"><img width="250px" src="../../lib/asset/images/loading.gif"></div><div class="col-md-4"></div></div>');

	        },
	       success: function(){
	           
	           $("#notificacao").html("Seu pedido foi enviado com sucesso! \n Logo farei contato :)");
	           $("#notificacao").fadeIn("slow");
	           
	        setTimeout(function(){
	            $("#notificacao").fadeOut("slow");

	        }, 10000);
	        $('#modal-title').html("Obrigado :D");
	        /*$('#modal-title').html('<div class="row"><div class="col-md-4"></div><div class="col-md-4"><img width="250px" src="images/picpay.jpeg"></div><div class="col-md-4"></div></div>');*/
	       },

		});
	});
	
}


function limpar_carrinho(qtd_itens_carrinho){
	
	if(qtd_itens_carrinho == 0){
		alert('Carrinho vazio!');
	}else{
		$.ajax({
		url: "../../lib/asset/php/limpar_carrinho.php",
		beforeSend: function(){
		
        	//colocar gif de carregamento

        },
		success: function(){
			att_pagina();	
		}
	});
	}
}

function remove_item_carrinho(item){

	$.ajax({
		url: "../../lib/asset/php/remove_item_carrinho.php",
		type: "post",
		data: "btn_remove_item="+item,
		beforeSend: function(){
		
			alert('beforeSend');
        	
        },
		success: function(){
			att_pagina()	
		}
	});
}
