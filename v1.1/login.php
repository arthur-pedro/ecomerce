<?php
	
	require("php/lib/conexao/conexao_mysql.php");

	$myDatabase = new MyDatabase();
	$conn = $myDatabase->connect();
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Creative Lab</title>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
<!-- Plugin-CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/animate.css">
<!-- Main-Stylesheets -->
<!-- <link rel="stylesheet" href="css/normalize.css"> -->
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/login.css">

</head>
<body>


<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
				<div class="box-login">
					<!-- <h6>Efetuar o login para acessar painel de administração</h6> -->
					<div class="myPanel">
				    	<h2 id="h2-text" class="centralizar">Bem-vindo de volta!</h2>
						<br>
				    	<!-- X------------------------------FORM LOGIN------------------------------X -->
						<!-- <form method="post"  id="form-login"> -->
							
							<div id="form-login" class="form-group">
								<div id="fade">
									<input id="nome" class="form-control myInput" type="text" name="nome" placeholder="Usuário">
									<input id="senha" class="form-control fix-position" type="password" name="senha" placeholder="Senha">
								</div>
							<button id="btn-form" type="button" name="btn_login" value="login" class="button" onclick="login();">Login</button>
							</div>	
							
							<h6 class="centralizar">Ainda não tem conta? <a href="#" onclick="cadastro();">clique aqui</a></h6>
							<div class="centralizar" id="display-message"></div>
						<!-- </form> -->

						<!-- X------------------------------FORM LOGIN------------------------------X -->	
					</div>	
				</div>	
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12"></div>
		</div>
			

	
	</div>	
</section>





<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/ajax_request_login.js"></script>
<!--Plugin-JS-->
<script src="js/owl.carousel.min.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/scrollUp.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="js/main.js"></script>
</body>
</html>