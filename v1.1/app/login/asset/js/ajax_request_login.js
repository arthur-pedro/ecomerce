
function login(){
	
var nome = $("#nome").val().toLowerCase();  
var senha = $("#senha").val().toLowerCase();

var btn_type = $("#btn-form").val();

$.ajax({
	url: "asset/php/login_request.php",
	type: "POST",
	data: "nome=" + nome + "&senha=" + senha + "&btn_login=" + btn_type,
	beforeSend: function(){
		
		/*$("#fade").html('<div class="row"><div class="col-md-4"></div><div class="col-md-4"><img src="images/loading.gif"></div><div class="col-md-4"></div></div>');*/

    },
   success: function(cb){
       
       alert(cb);

       if (cb == "logged") {

     
       		$("#fade").html('<div class="row"><div class="col-md-4"></div><div class="col-md-4"><img src="../../lib/asset/images/check.gif"></div><div class="col-md-4"></div></div>');
       			
       		setTimeout(function(){
      			window.location.replace("../main");
			}, 1300);
       		

       		
       }else if(cb == "nullField"){
       		$("#display-message").fadeIn("slow");
       		$("#display-message").addClass("alert alert-danger");
       		$("#display-message").html("Preencha os campos, por favor");
       		$("input").css("border-color","#ffa7a5");

       		setTimeout(function(){
        	$("#display-message").fadeOut("slow");
        	$("input").css("border-color","")
		}, 2000);
       }else if(cb == "erroQuery"){
       		$("#display-message").fadeIn("slow");
       		$("#display-message").addClass("alert alert-danger");
       		$("#display-message").html("Dados inválidos");
       		$("input").css("border-color","#ffa7a5");
       		
       		setTimeout(function(){
        	$("#display-message").fadeOut("slow");
        	$("input").css("border-color","")
		}, 2000);
       }else if(cb == "nullRegister"){
       		$("#display-message").fadeIn("slow");
       		$("#display-message").addClass("alert alert-danger");
       		$("#display-message").html("Senha | Usuário incorreto");
       		$("input").css("border-color","#ffa7a5");
       		
       		setTimeout(function(){
        	$("#display-message").fadeOut("slow");
        	$("input").css("border-color","")
		}, 2000);
       }
    },
});
}


function cadastrar(){
	
var nome = $("#nome").val().toLowerCase();  
var email = $("#email").val().toLowerCase();
var senha = $("#senha").val();  
var confirma_senha = $("#confirmar-senha").val();

var btn_type = $("#btn-form").val();

	$.ajax({
		url: "asset/php/login_request.php",
		type: "POST",
		data: "nome=" + nome + "&email=" + email + "&senha=" + senha + "&confirma_senha=" + confirma_senha +"&btn_login=" + btn_type,
		beforeSend: function(){
			
			/*$("#fade").html('<div class="row"><div class="col-md-4"></div><div class="col-md-4"><img src="images/loading.gif"></div><div class="col-md-4"></div></div>');*/


	    },
	   success: function(cb){
	       
	   	
	 
	       if(cb == "nullField"){
					
					$("#display-message").fadeIn("slow");
					$("#display-message").addClass("alert alert-danger	");
	       		$("#display-message").html("Preencha os campos, por favor");
	       		$("input").css("border-color","#ffa7a5");
	       		setTimeout(function(){
	        	$("#display-message").fadeOut("slow");
			}, 2000);
	       		
	       }else if (cb == "passDif"){
	       		
	       		$("#display-message").fadeIn("slow");
	       		$("#display-message").addClass("alert alert-danger	");
	       		$("#display-message").html("Senhas precisam ser iguais");
	       		$("input").css("border-color","#ffa7a5");
	       		setTimeout(function(){
	        	$("#display-message").fadeOut("slow");
			}, 2000);
	       		
	       }else if (cb == "erroQuery"){
	       		
	       		$("#display-message").fadeIn("slow");
	       		$("#display-message").addClass("alert alert-danger	");
	       		$("#display-message").html("Erro inesperado");
	       		setTimeout(function(){
	        	$("#display-message").fadeOut("slow");
			}, 2000);
	       		
	       }else if(cb == "cadastrado"){
	       		
	       		$("#fade").html('<div class="row"><div class="col-md-4"></div><div class="col-md-4"><img src="../../lib/asset/images/check.gif"></div><div class="col-md-4"></div></div>');
	       		setTimeout(function(){
	      			window.location.replace("index.php");
				}, 1300);

			}
	    },
	});
}



// MUDA O HTML DA PAGINA
function cadastro(){

	var new_html = '<h2 id="h2-text" class="centralizar">Ólá novato</h2><div id="form-login" class="form-group"><div id="fade"><input id="nome" class="form-control myInput" type="text" name="nome" placeholder="Usuário"><input id="email" class="form-control myInput fix-position" type="text" name="email" placeholder="E-mail"><input id="senha" class="form-control fix-position" type="password" name="senha" placeholder="Senha"><input id="confirmar-senha" class="form-control myInput fix-position" type="password" name="confirma_senha" placeholder="Confirmar senha"></div><button id="btn-form" type="button" name="btn-login" value="cadastro" class="button" onclick="cadastrar();">Cadasstrar</button></div><h6 class="centralizar">Já tem conta? <a href="index.php">clique aqui</a></h6><div id="display-message"></div>';
	$('.myPanel').html(new_html);
}
