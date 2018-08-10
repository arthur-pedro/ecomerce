
<?php  
    
    session_start();

    
    require("php/myFunctions.php");

    if(!isset($_SESSION['qtd_produtos'])){
        $_SESSION['qtd_produtos'] = 0;
    }
    
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Creative Lab</title>
    <!-- Place favicon.ico in the root directory -->
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script>
 -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> -->

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">
<div class="container-flui"></div>
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo" style="">
                    <h2>creative lab</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">Voltar às compras</a></li>
                    <li><a href="#faq-page">Como fazer compras</a></li>
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"> R$ <?php echo calcula_preco().' '; ?>(<span class="qtd_produtos_menu"><?php echo $_SESSION['qtd_produtos'];?></span> itens)</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->

   
    <!--Mainmenu-area/-->

    <header class="header-color" id="home-page">
        <div class="container" style="padding-top: 200px; padding-bottom: 50px;">
            <div class="row">
                <div class="col-xs-12 col-md-7 header-text page-title">
                    <h2 class="color-fix">Meus itens</h2>
                    <p class="color-fix">Itens no carrinho podem ser removidos clicando no botão "remover"</p>
                    
                </div>
            </div>
        </div>
    </header>


    <!-- Carrinho -->
    </br>
    </br>
    <div class="container">
        <div class="row add-item">

            <div class="meu-item" id="div-remove"></div>
                <?php

                    require("php/conexao_mysql.php");
                    // verificação
                    if(isset($_SESSION['carrinho'])){

                        // echo var_dump($query);

                        // echo var_dump($teste);

                        foreach ($_SESSION['query_carrinho'] as $key) {
                            $result = $conn->query($key);

                            while ($row = $result->fetch_assoc()) {
                                // printf ("%s (%s) (%s)\n", $row["nome"], $row["preco"], $row["descricao"]);

                                // $_SESSION['total_preco'] = $_SESSION['total_preco'] + $row["preco"];

                                // inicio do html
                                ?>
                                <div class="col-md-12">
                                    <div class="box">
                                    <div class="box-icon">
                                        <img src="images/service-icon-1.png" alt="">
                                    </div>
                                        <h3 class=""><?php echo $row["nome"]; ?></h3>
                                        <h5>R$ <?php echo $row["preco"]; ?></h5>
                                        <p><?php echo $row["descricao"]; ?></p>
                                        <button id="btn-remover" class="btn button" data-toggle="modal" data-target="#remove">Remover</button>
                                    </div>
                                </div>
                                <?php
                                // fim do html
                            }
                        }
                    }else{
                        ?> 

                        <div class="col-md-12">
                            <div class="box">
                                <h3 class="">Carrinho vazio</h3>
                                <p>Voltar para página inicial para continuar comprando</p>
                            </div>
                        </div>

                        <?php 
                    }
                ?>

        </div>
    </div>
    <!-- enviar pedido -->
    </br>
    </br>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-3"><button id="btn-enviar-pedido" class="btn button" data-toggle="modal" data-target="#enviar_proposta">Enviar pedido</button></div>
            <div class="col-sm-3"><button onclick="limpar_carrinho();" type="button" id="btn-enviar-pedido" class="btn button">Limpar carrinho</button></div>
            </ul>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <!-- enviar pedido -->

    <!-- modal de compras -->
    <div class="modal fade" id="remove" role="dialog" style="padding-top: 100px;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Item removido do carrinho!</h4>
                </div>
                <div class="modal-body">
                  <p>Fechar esta janela para continuar comprando.</p>
                </div>
                <div class="modal-footer">
                  <button onclick="" type="button" class="btn button" data-dismiss="modal">Continuar comprando</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal de compras -->

    <!-- modal de enviar carrinho -->
    <div class="modal fade" id="enviar_proposta" role="dialog" style="padding-top: 100px;">
        <div class="modal-dialog modal-sm" style="width: 30%;">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 style="text-align: center;" id="modal-title" class="modal-title">Me envie sua proposta por e-mail</h4>
                </div>
                <div id="notificacao" class="modal-body">
                    
                    <h2 id="titnotif">
                    </h2>
                    <p id="txtnotif"></p>

                    <h2 style="text-align: center;"> Total a pagar: </h2><h1 style="text-align: center;">R$ <?php echo calcula_preco(); ?></h1>
                  
                    <form class="row" method="post">
                        <div class="col-sm-6">
                            
                            <label for="nome">Nome</label><br>
                            <input class="form-control" type="text" name="nome" placeholder="digite seu nome..." required>
                                   
                        </div>
                        <div class="col-sm-6">
                            
                            <label for="email">Email</label><br>
                            <input class="form-control" type="text" name="email" placeholder="digite seu email..." class="form-control" required>
                            
                        </div> 
                        <div class="col-sm-12">
                            <label for="mensagem">Informações adicionais</label><br>
                            <textarea class="form-control" rows="5" name="mensagem" placeholder="Gostaria de perguntar ou informar algo?" required=""></textarea>
                            
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button class="form-control button" type="button" onclick="enviar_email();" id="btn-enviar-modal">Enviar</button>
                        </div>
                    </form>
                    
                </div>
                    

            </div>
        </div>
    </div>
    <!-- modal de enviar carrinho -->

    <!-- dúvidas -->
    <section class="gray-bg section-padding" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Como isso funciona?</h2>
                        <p>Contrato, orçamento, formas de pagamento, entre outras dúvidas frequentes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Como eu faço para contratar seu serviço?</a>
                            </h4>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <p>Primeiro é necessário adicionar ao carrinho, os serviços que você precisa. Depois 
                                é só enviar sua proposta pra mim. Após isso, pode ficar tranquilo, que eu entro em contato com você!</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Qual a garantia que eu tenho que o serviço vai ser entregue e no prazo correto?</a>
                            </h4>
                            <div id="collapse2" class="panel-collapse collapse">
                                <p>Assim que eu receber sua proposta, te mandarei uma resposta com o prazo de <b><i>entrega</i></b> do projeto. Nossa equipe conta com profissionais qualificados para garantir a entrega no prazo conbinado, ou devolvemos o seu dinheiro.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Como funciona o pagamento e <b><i>entrega</i></b> do produto finalizado?</a>
                            </h4>
                            <div id="collapse3" class="panel-collapse collapse">
                                <p>Com um prazo de entrega e orçamento definido, a primeira parcela é paga, referente a metado do valo total. Ao longo do projeto, entregas periódicas serão feitas para você analizar se estamos seguindo pelo caminho certo! Após a conclusão e aprovação do serviço, a segunda metado é paga e entregamos o produto pra você :D</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Quem são vocês?</a>
                            </h4>
                            <div id="collapse4" class="panel-collapse collapse">
                                <p>A creativeLab se trata de uma parceria entre designs, web designs, e desenvolvedores especializados com a finalidade de idealizar e desenvolver projetos freelancers de forma rápida, eficiente, e de baixo custo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dpuvidas -->


    <!-- contato -->
    <footer class="footer-area relative sky-bg footer-color" id="contact-page ">
        <div class="absolute footer-bg" id="contact-page"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12  text-center">
                        <div class="page-title">
                            <h2 class="color-fix">Contato</h2>
                            <p style="margin-bottom: 50px;" class="color-fix">Tem alguma dúida? Para mais informações, por favor, entrar em contato diretamente conosco!</p>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4 text-center">
                            <address class="side-icon-boxes">
                                <div class="side-icon-box">
                                    <div class="side-icon">
                                        <img src="images/location-arrow.png" alt="">
                                    </div>
                                    <p class="color-fix"><strong>Endereço: </strong> Pernambuco, Recife <br />BR</p>
                                </div>
                            </address>
                        </div>
                        <div class="col-xs-12 col-md-4 text-center">
                            <address class="side-icon-boxes">
                                <div class="side-icon-box">
                                    <div class="side-icon">
                                        <img src="images/phone-arrow.png" alt="">
                                    </div>
                                    <p class="color-fix"><strong>Telefone: </strong>+55 (81) 99635-4295
                                    </p>
                                </div>
                            </address>
                        </div>
                        <div class="col-xs-12 col-md-4 text-center">
                            <address class="side-icon-boxes">
                                <div class="side-icon-box">
                                    <div class="side-icon">
                                        <img src="images/mail-arrow.png" alt="">
                                    </div>
                                    <p class="color-fix"><strong>E-mail: </strong>arthurpedroweb@gmail.com
                                    </p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 text-center">
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="https://github.com/arthur-pedro"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-margin-fix"></div>
        <div class="footer-bottom ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 text-center">
                        <p style="padding-bottom: 20px;" class="color-fix">&copy;Copyright 2018 All right resurved.  This template is made with <i class="" aria-hidden="true"></i> by <a class="color-fix" href="https://colorlib.com">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- contato -->

    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/add_item.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <!-- <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myDIV *").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script> -->
</body>

</html>
