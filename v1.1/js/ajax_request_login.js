function login(){
	
	jQuery("#form-login").submit(function(){
		
		var dados = jQuery(this).serialize();

		$.ajax({
			url: "php/login_request.php",
			type: "post",
			data: dados,
			beforeSend: function(){
			

	        },
	       success: function(){
	           
	           alert("success!");

	       }
		});
	});
}