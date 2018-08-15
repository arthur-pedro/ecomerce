<?php
	require("php/conexao_mysql.php");


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
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
				<div class="box-login-1">
					<!-- <h2 class="centralizar">teste</h2> -->
					<img src="images/login.gif">
				</div>	
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
				<div class="box-login">
					<h2 class="centralizar">Bem-vindo de volta!</h2>
					<br>
					<!-- <h6>Efetuar o login para acessar painel de administração</h6> -->
					<form method="post" id="form-login">
						<div class="form-group">
						<input class="form-control myInput" type="text" name="email" placeholder="Usuário">
						<input class="form-control fix-position" type="password" name="senha" placeholder="Senha">
						<button onclick="login();" type="button" name="btn_login" class="button">Login</button>
						</div>
					</form>
				</div>	
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12"></div>
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