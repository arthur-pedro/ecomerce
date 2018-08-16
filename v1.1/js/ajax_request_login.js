function login(){
	/*alert("w");*/
	jQuery("#form-login").submit(function(){
		
		var dados = jQuery(this).serialize();

		$.ajax({
			url: "php/login_request.php",
			type: "post",
			data: dados,
			beforeSend: function(){
				
				alert("beforeSend");
	        },
	       success: function(){
	           
	           alert("usuario logado");

	       },

	       error: function(){

	       		alert("Nome ou senha incorretos!")
	       }
		});
	});
}