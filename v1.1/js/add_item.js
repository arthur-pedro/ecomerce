
function att_pagina(){
	location.reload();
}

// AJAX

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


function enviar_email(){
	$.ajax({
		url: "php/send_email.php",
		type: "post",
		beforeSend: function(){
		
        	$('#modal-title').html('Enviando email...');
        	$('#notificacao').html('<img src="	images/enviando.gif">');
        },
       success: function(){
           
           $("#notificacao").html("Seu formulário foi enviado com sucesso! \n Logo farei contato :)");
           // $("#titnotif").html("Logo farei contato :)");
           // $("#notificacao").addClass("boa");
           $("#notificacao").fadeIn("slow");
           
        setTimeout(function(){
            $("#notificacao").fadeOut("slow");
        }, 3000);
        $('#modal-title').html('Obrigado :D');
       },

	});
}


function limpar_carrinho(){
	
	$.ajax({
		url: "php/limpar_carrinho.php",
		success: function(){
			att_pagina();	
		}
	});
}

