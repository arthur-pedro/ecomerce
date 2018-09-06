function sendEmail(){
		jQuery('#form-enviar-pedido').submit(function(){
		var dados = jQuery(this).serialize();
		$.ajax({
			url: "../../lib/asset/php/sendEmail.php",
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

function clearShoppingCar(qtd_itens_carrinho){
	if(qtd_itens_carrinho == 0){
		alert('Carrinho vazio!');
	}else{
		$.ajax({
		url: "asset/php/clearShoppingCar.php",
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
		url: "asset/php/remove_item_carrinho.php",
		type: "post",
		data: "btn_remove_item="+item,
		beforeSend: function(){
			alert('beforeSend');
        },
		success: function(){
			att_pagina();	
		}
	});
}

function att_pagina(){
	location.reload();
	$('html,body').scrollTop(0);
}