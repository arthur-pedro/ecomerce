
<?php  
    
    session_start();

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
    <link rel="apple-touch-icon" href="../../lib/asset/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="../../lib/asset/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="../../lib/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../lib/asset/css/themify-icons.css">
    <link rel="stylesheet" href="../../lib/asset/css/magnific-popup.css">
    <link rel="stylesheet" href="../../lib/asset/css/animate.css">
    <!-- Main-Stylesheets -->
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link rel="stylesheet" href="../../lib/asset/css/style.css">
    <link rel="stylesheet" href="../../lib/asset/css/responsive.css">

</head>

<body data-spy="scroll" data-target="#primary-menu">
<div class="container-fluid"></div>
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <!-- <div class="mainmenu-area" data-spy="affix" data-offset-top="100"> -->
        <div class="mainmenu-area">
        <div class="container-fluid container-fluid-navbar">
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
                <!-- <div class="navbar-header">
                </div> -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#service-page">Serviços</a></li>
                    <li><a href="#faq-page">Dúvidas</a></li>
                    <li><a href="#contact-page">Contato</a></li>
                    <li><a href="../carrinho/index.php">
                    <span class="glyphicon glyphicon-shopping-cart"><span class="badge badge-warning"><?php echo $_SESSION['qtd_produtos'];?>
                    </span>
                    R$ 0.00
                    </a>
                
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <header class="price-area section-padding" id="home-page">
        <div class="container" style="padding-top: 200px; padding-bottom: 50px;">
            <div class="row">
                <div class="col-xs-12 col-md-7 header-text page-title">
                    <h2 class="">It’s all about Promoting your Business</h2>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex inventore vel error quibusdam animi fugiat, doloribus dolores consectetur nulla deleniti sint blanditiis quod debitis quis vitae officiis tempora numquam.<a href="https://www.vexels.com/vetores/previsualizar/73424/fundo-de-salpicos-coloridos-salpicos-de-tinta"> image | designed by Vexels</a></p>
                    <a href="../portfolio.html"><button id="btn-portfolio" class="btn">Conhecer portfólio!</button></a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <!--Mainmenu-area/-->

    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <!-- Container -->
        <div class="container">
                <h2 class="text-center" style="text-transform: uppercase;">Filtrar categoria</h2>
                </br>               
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu1">Design</a></li>
                    <li><a data-toggle="tab" href="#menu2">Web Development</a></li>
                </ul>
                </br>
                </br>
            <!-- tab content -->
            <div class="tab-content">
                <!-- menu 1 -->
                <div id="menu1" class="tab-pane fade in active">
                    <!-- form -->
                    <form method="POST">
                        <!-- row -->
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-lg-4 banner-text">
                                <div class="box">
                                    <div class="box-icon">
                                        <img src="../../lib/asset/images/service-icon-1.png" alt="">
                                    </div>
                                    <div id="item_1">
                                        <h3>Cartão Visita</h3>
                                        <hr>
                                        <h5>preço: R$ <span>180</span></h5>
                                        <p>Criação de cartão visita</p>
                                        <hr>
                                        <button type="button" onclick="add_carrinho('Cartão Visita');" name="product" value="Cartão Visita" class="btn button" data-toggle="modal" data-target="#buy">Escolher!</button>   
                                    </div> 
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4 banner-text">
                                <div class="box">
                                    <div class="box-icon">
                                        <img src="../../lib/asset/images/service-icon-1.png" alt="">
                                    </div>
                                    <div id="item_2">
                                        <h3>Banner</h3>
                                        <!-- <input style="display:none" type="text" value="teste" name="teste"> -->
                                        <hr>
                                        <h5>preço: R$ <span>200</span></h5>
                                        <p>Criação de teste</p>
                                        <hr>
                                        <button type="button" onclick="add_carrinho('Banner');" name="product" value="Banner" class="btn button" data-toggle="modal" data-target="#buy">Escolher!</button>       
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4 banner-text">
                                <div class="box">
                                    <div class="box-icon">
                                        <img src="../../lib/asset/images/service-icon-1.png" alt="">
                                    </div>
                                    <div id="item_2">
                                        <h3>Vetorização de imagens</h3>
                                        <!-- <input style="display:none" type="text" value="teste" name="teste"> -->
                                        <hr>
                                        <h5>preço: R$ <span>130</span></h5>
                                        <p>Criação de teste</p>
                                        <hr>
                                        <button type="button" onclick="add_carrinho('Vetorização');" name="product" value="Vetorização de imagens" class="btn button" data-toggle="modal" data-target="#buy">Escolher!</button>       
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-4 banner-text">
                                    <div class="box">
                                        <div class="box-icon">
                                            <img src="../../lib/asset/images/service-icon-1.png" alt="">
                                        </div>
                                        <div id="item_2">
                                            <h3>Ilustração</h3>
                                            <!-- <input style="display:none" type="text" value="teste" name="teste"> -->
                                            <hr>
                                            <h5>preço: R$ <span>130</span></h5>
                                            <p>Ilustrações avulsas</p>
                                            <hr>
                                            <button type="button" onclick="add_carrinho('Ilustração');" name="product" value="Ilustração" class="btn button" data-toggle="modal" data-target="#buy">Escolher!</button>       
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- row -->
                    </form>
                </div>    

                <!-- modal de compras -->
                <div class="modal fade" id="buy" role="dialog" style="padding-top: 100px;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                              <button onclick="att_pagina();" type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Item adicionado no carrinho!</h4>
                            </div>
                            <div class="modal-body">
                              <p>Fechar esta janela para continuar comprando.</p>
                            </div>
                            <div class="modal-footer">
                              <button onclick="att_pagina();" type="button" class="btn button" data-dismiss="modal">Continuar comprando</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal de compras -->

                <div id="menu2" class="tab-pane fade">
                  
                    <!-- SERVIÇOES DE WEB DEVELOPER -->
                    <h1>Em Manutenção...</h1>

                </div>   
            </div>  
        </div>
        
        <!-- Container -->
     </section>
    <!--Feature-area/-->


    <div class="line container"></div>
  

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
                                        <img src="../../lib/asset/images/location-arrow.png" alt="">
                                    </div>
                                    <p class="color-fix"><strong>Endereço: </strong> Pernambuco, Recife <br />BR</p>
                                </div>
                            </address>
                        </div>
                        <div class="col-xs-12 col-md-4 text-center">
                            <address class="side-icon-boxes">
                                <div class="side-icon-box">
                                    <div class="side-icon">
                                        <img src="../../lib/asset/images/phone-arrow.png" alt="">
                                    </div>
                                    <p class="color-fix"><strong>Telefone: </strong>+55 81 99635-4295
                                        <!-- <a href="callto:8801812726495">+55 (81) 99635-4295</a> <br /> -->
                                    </p>
                                </div>
                            </address>
                        </div>
                        <div class="col-xs-12 col-md-4 text-center">
                            <address class="side-icon-boxes">
                                <div class="side-icon-box">
                                    <div class="side-icon">
                                        <img src="../../lib/asset/images/mail-arrow.png" alt="">
                                    </div>
                                    <p class="color-fix"><strong>E-mail: </strong>arthurpedroweb@gmail.com
                                        <!-- <a href="mailto:youremail@example.com">arthurpedroweb@gmail.com</a> <br /> -->
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
                            <li><a href="https://br.pinterest.com/arthurpedro_0/"><i class="ti-pinterest"></i></a></li>
                            <li><a href="https://https://www.instagram.com/arthurpedro_0/"><i class="ti-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/arthur-pedro-473a14103/"><i class="ti-linkedin"></i></a></li>
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
                        <p style="padding-bottom: 20px;" class="color-fix">&copy;Copyright 2018 All right reserved.  This template is made with <i class="" aria-hidden="true"></i> by <a class="color-fix" href="https://colorlib.com">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- contato -->

    <!--Vendor-JS-->
    <script src="../../lib/asset/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../lib/asset/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="../../lib/asset/js/owl.carousel.min.js"></script>
    <script src="../../lib/asset/js/contact-form.js"></script>
    <script src="../../lib/asset/js/jquery.parallax-1.1.3.js"></script>
    <script src="../../lib/asset/js/scrollUp.min.js"></script>
    <script src="../../lib/asset/js/magnific-popup.min.js"></script>
    <script src="../../lib/asset/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="../../lib/asset/js/main.js"></script>
    <script src="asset/js/ajax_request_addItem.js"></script>
</body>

</html>
