function login(){
	/*alert("w");*/
	//jQuery("#form-login").submit(function(){
		
		var nome = $("#nome").val().toLowerCase();  
		var senha = $("#senha").val().toLowerCase();

		var btn_type = $("#btn-form").val();
		//var dados = 'ok';

		$.ajax({
			url: "php/login_request.php",
			type: "POST",
			data: "nome=" + nome + "&senha=" + senha + "&btn_login=" + btn_type,
			beforeSend: function(){
				// alert(dados);
				// $('body').html('Enviando email...');
	   //      	$('#notificacao').html('');

	   			// $('#h2-text').html('<h2>logando...</h2>');


	        },
	       success: function(cb){
	           
	           // alert(cb);

	           if (cb == "logado") {
	           		$("#display-message").addClass("alert alert-success	");
	           		$("#display-message").html("Sucesso");
	           		window.location.replace("adm_area.php");
	           }else if(cb == "nullField"){
	           		$("#display-message").addClass("alert alert-danger");
	           		$("#display-message").html("Preencha os campos, por favor");
	           }else if(cb == "erroQuery"){
	           		$("#display-message").addClass("alert alert-danger");
	           		$("#display-message").html("Dados inválidos");
	           }else if(cb == "nullRegister"){
	           		$("#display-message").addClass("alert alert-danger");
	           		$("#display-message").html("Senha | Usuário incorreto");
	           }

	           $("#display-message").fadeIn("slow");

	        	setTimeout(function(){
	            	$("#display-message").fadeOut("slow");
				}, 2000);
	       },
	// 	});
	});
}


function cadastrar(){
	/*alert("w");*/
	//jQuery("#form-login").submit(function(){
		
		var nome = $("#nome").val().toLowerCase();  
		var senha = $("#email").val().toLowerCase();
		var nome = $("#senha").val().toLowerCase();  
		var senha = $("#confirmar-senha").val().toLowerCase();

		var btn_type = $("#btn-form").val();
		//var dados = 'ok';

		$.ajax({
			url: "php/login_request.php",
			type: "POST",
			data: "nome=" + nome + "&email=" + email + "&senha=" + senha + "&confirma_senha=" + confirma_senha +"&btn_login=" + btn_type,
			beforeSend: function(){
				// alert(dados);
				// $('body').html('Enviando email...');
	   //      	$('#notificacao').html('');

	   			// $('#h2-text').html('<h2>logando...</h2>');


	        },
	       success: function(cb){
	           
	           // alert(cb);

	           if (cb == "cadastrado") {
	           		$("#display-message").addClass("alert alert-success	");
	           		$("#display-message").html("Cadastrado com sucesso");
	           		window.location.replace("login.php");
	           }

	           $("#display-message").fadeIn("slow");

	        	setTimeout(function(){
	            	$("#display-message").fadeOut("slow");
				}, 2000);
	       },
	// 	});
	});
}



// MUDA O HTML DA PAGINA
function cadastro(){
	// alert('ok');
	var new_html = '<h2 id="h2-text" class="centralizar">Ólá novato</h2><div id="form-login" class="form-group"><input id="nome" class="form-control myInput" type="text" name="nome" placeholder="Usuário"><input id="email" class="form-control myInput fix-position" type="text" name="email" placeholder="E-mail"><input id="senha" class="form-control fix-position" type="password" name="senha" placeholder="Senha"><input id="confirmar-senha" class="form-control myInput fix-position" type="password" name="confirma-senha" placeholder="Confirmar senha"><button id="btn-form" type="button" name="btn-login" value="cadastro" class="button" onclick="">Login</button></div><div id="display-message"></div>';
	$('.myPanel').html(new_html);
}

function verifica_senha(){

}