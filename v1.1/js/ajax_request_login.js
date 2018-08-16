function login(){
	/*alert("w");*/
	//jQuery("#form-login").submit(function(){
		
		var dados = $("#form-login").serialize();
		//var dados = 'ok';

		$.ajax({
			url: "php/login_request.php",
			type: "post",
			data: dados.toLowerCase(),
			beforeSend: function(){
				// alert(dados);
				// $('body').html('Enviando email...');
	   //      	$('#notificacao').html('');

	   			$('#h2-text').html('<h2>logando...</h2>');


	        },
	       success: function(cb){
	           
	           alert(cb);

	       },
	// 	});
	});
}


function cadastrar(){
	/*alert("w");*/
	jQuery("#form-login").submit(function(){
		
		var dados = jQuery(this).serialize();

		$.ajax({
			url: "php/login_request.php",
			type: "post",
			data: dados.toLowerCase(),
			beforeSend: function(){
				
			// $('.myPanel').html('<h3>cadastrando...</h3>');
	   		// $('#notificacao').html('');
	   		$('#h2-text').html('<h2>cadastrando...</h2>');

	        },
	       success: function(){
	           
	           alert("usuario cadastrado");
	           window.location.replace("login.php");

	       },
		});
	});
}



// MUDA O HTML DA PAGINA
function cadastro(){
	// alert('ok');
	var new_html = '<h2 class="centralizar">Olá noob</h2><br><form method="post" action="php/login_request.php" id="form-login"><div class="form-group"><input class="form-control myInput" type="text" name="nome" placeholder="Usuário"><input class="form-control myInput fix-position" type="text" name="email" placeholder="E-mail"><input class="form-control fix-position" type="password" name="senha" placeholder="Senha"><input class="form-control fix-position" type="password" name="confirma_senha" placeholder="Confirmar senha"><button   type="submit" name="btn_form" value="btn_cadastro" class="button" onclick="cadastrar();">Cadastrar</button></div></form>';
	$('.myPanel').html(new_html);
}

function verifica_senha(){

}