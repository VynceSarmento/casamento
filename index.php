<?php
require './persistencia/Conexao.class.php';
require './persistencia/ComentsDAO.php';
require './persistencia/ComentsVO.php';

$comentsDAO = new ComentsDAO();
$formComents = $comentsDAO->buscarComents();
$total = count($formComents);
?>
<!DOCTYPE html>
<html lang="en-gb" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Vanessa & Anderson</title>
        <link href="images/Coracao/Heart_Blue.png" rel="shortcut icon" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/isotope.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="flexslider/flexslider.css" rel="stylesheet" />
        <link href="Framework/Theme-SinglePageAdmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet">
        <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="Framework/bootstrap/startbootstrap-sb-admin-2-1.0.7/bower_components/bootstrap/less/scaffolding.less" rel="stylesheet">
    </head>

    <body>
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a href="#" class="navbar-brand scroll-top logo animated bounceInLeft" style="font-size: 50px;"><b><i>V&A</i></b></a> </div>
                    <!--/.navbar-header-->
                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="mainNav">
                            <li class="active" id="firstLink"><a href="#home" class="scroll-link" id="menu"><b>Início</b></a></li>
                            <li><a href="#introducao" class="scroll-link" id="menu"><b>Introdu&ccedil;&atilde;o</b></a></li>
                            <li><a href="#hist" class="scroll-link" id="menu"><b>Nossa Hist&oacute;ria</b></a></li>
                            <li><a href="#comentarios" class="scroll-link" id="menu"><b>Coment&aacute;rios</b></a></li>
                            <li><a href="#lista" class="scroll-link" id="menu"><b>Lista de Casamento</b></a></li>
                            <li><a href="#contato" class="scroll-link" id="menu"><b>Fale Conosco</b></a></li>
                            <li><a href="#local" class="scroll-link" id="menu"><b>Local</b></a></li>
                        </ul>
                    </div>
                </nav> 
            </div>
        </header>

        <section id="home">
            <div class="banner-container">
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img class="img-responsive" src="images/slides/01.jpg" alt="" />
                            <div class="flex-caption container">
                                <div class="countdown styled"></div>
                                <h2 id="titulo" style="font-size: 60px;"><b>&Eacute; com imensa alegria que anunciamos o nosso casamento!!</b></h2> 
                                <h2 style="font-size: 50px;"><b>17/06/2016</b>.</h2>
                            </div>
                        </li>                                               
                        <li>
                            <img class="img-responsive" src="images/slides/01.jpg" alt="" />
                            <div class="flex-caption container">
                                <div class="countdown styled"></div>
                                <h2 id="titulo" style="font-size: 50px;">Um casamento feliz se constr&oacute;i com muito amor, carinho e compreens&atilde;o.</h2> 
                                <p style="font-size: 30px;">Juntem-se a n&oacute;s <b>17/06/2016</b>.</p>  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="introducao">
            <div class="container"> 
                <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <i style="font-size: 50px; color: #F0F" class="fa fa-female"><i style="font-size: 50px; color: #08F" class="fa fa-male"></i></i>
                            <h2 id="titulo" style="font-size: 70px;">Vanessa & Anderson</h2>
                            <p style="font-size: 30px; color: #0c0c0c">
                                <b>Sejam Bem vindos ao nosso site!!</b>
                            </p>
                            <p style="font-size: 30px; color: #0c0c0c">
                                <b>Estamos muito felizes com esta nova etapa que estamos vivendo e queremos compartilhar com nossos amigos e
                                    familiares um pouquinho da nossa hist&oacute;ria de amor.</b>
                            </p>
                            <p style="font-size: 30px; color: #0c0c0c">
                                <b>Estamos preparando tudo com muito carinho para que este dia seja INESQUEC&Iacute;VEL!</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row feature design">
                </div>
            </div>
        </section>

        <section id="hist">
            <div class="container">
                <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h2 id="titulo" style="font-size: 70px;">Nossa Hist&oacute;ria</h2>
                        </div>

                    </div> 
                </div>
                <div class="row feature design">
                    <!--<div class="col-md-4">
                        <img src="images/meio.jpg" alt="" width="100%"> 
                    </div>-->
                    <div class="col-md-12">
                        <p style="font-size: 30px; color: #0c0c0c">
                            <b>Em 2008 comecei a participar do grupo de jovens IUVENES DEI e foi l&aacute; em que tudo come&ccedil;ou quando por curiosidade procurei
                                saber quem era o Anderson, porque minha madrinha Fernanda havia me dito que o Thiago tinha um primo que se chamava Anderson
                                e fazia parte deste grupo.
                                Ent&atilde;o em um domingo fui para o grupo de jovens e nos apresentamos e a partir de ent&atilde;o come&ccedil;amos a conversar
                                e a nos conhecer melhor, ficamos amigos.
                                Eu o achava divertido, interessante, bonito, esfor&ccedil;ado e depois ele come&ccedil;ou a demonstrar um interesse maior por mim
                                al&eacute;m da amizade, nas reuniões do grupo e na missa sempre troc&aacute;vamos olhares. Na &eacute;poca n&atilde;o existia ainda ao whatsapp,
                                ent&atilde;o troc&aacute;vamos mensagens no celular e pelo MSN e ele sempre muito rom&acirc;ntico aos poucos me conquistou
                                e no dia 22 de junho de 2009, sentados na escadinha de entrada da sala do grupo de jovens Iuvenes dei ele me pediu em namoro,
                                era &eacute;poca de barraquinha na S&atilde;o Pedro e S&atilde;o Paulo, no dia seguinte dan&ccedil;amos quadrilha,
                                meus pais o conheceram e ent&atilde;o oficializamos nosso namoro.</b>
                        </p> 
                        <div class="col-md-4">
                            <img src="images/meio.jpg" alt="" width="100%"> 
                        </div>
                        <p style="font-size: 30px; color: #0c0c0c">
                            <b>E assim come&ccedil;ou a nossa hist&oacute;ria e hoje j&aacute; fazem 6 anos e 7 meses que estamos namorando, anos de muita
                                hist&oacute;ria, de muitos momentos maravilhosos juntos, muito amor, aprendizado e amadurecimento!
                                E agora est&aacute; faltando pouquinho para podermos realizar um grande sonho, o nosso casamento!</b>
                        </p>
                        <br>
                        <p style="font-size: 30px; color: #0c0c0c">
                            <b>Se divirtam com nosso site e  nos deixem mensagens,coment&aacute;rios, nos contem algum momento que viveram com a gente,
                                algum fato engra&ccedil;ado, ficaremos felizes em relembrar!!!</b>
                        </p> 
                    </div>
                </div>
            </div>
        </section>

        <section id="comentarios" class="page-section">
            <form action="controle/cntrlComents.php" method="post" name="valide">
                <input type="hidden" name="acao" id="acao" value="inserir"/>
                <div class="container"> 
                    <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="row">
                            <div class="text-center col-sm-8 col-sm-offset-2">
                                <h2 id="titulo" style="font-size: 60px;">Coment&aacute;rios</h2>
                            </div>

                        </div> 
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <h3 id="titulo" style="font-size: 50px;">Ent&atilde;o conta pra gente...</h3><br>
                            <label for="nome" id="titulo" style="font-size: 35px;">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" style="font-size: 30px;" title="Por favor insira seu nome"  required>
                            <label for="coments" id="titulo" style="font-size: 70px;"></label>
                            <textarea name="coments" class="form-control" id="coments" cols="3" style="font-size: 30px;" placeholder="Deixe sua mensagem..." title="Por favor, digite a sua mensagem (pelo menos 10 caracteres )" required></textarea>

                            <button name="enviar" type="submit" class="btn btn-lg btn-primary" id="enviar" style="font-size: 25px;"><b>Enviar</b></button>                        
                        </div>
                        <?php
                        $contador = 0;
                        foreach ($formComents as $comentario) {
                            ?>
                        <div class="form-group" id="post">
                                <?php
                                echo ''.$comentario->getNome().":";
                                echo '<br>';
                                echo $comentario->getComents();
                                echo '<br>';
                                list ($ano, $mes, $dia) = explode("-", $comentario->getData());
                                echo "<b id='post' style='font-size: 13px;'>Postado em: " . $dia . "/" . $mes . "/" . $ano .
                                " &agrave;s " . $comentario->getHora() . "</b>";
                                ?>
                                <hr>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="result"></div>
                    </div>
                </div>
            </form>
        </section>

        <section id="lista" class="page-section">
            <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="row">
                    <div class="text-center col-sm-8 col-sm-offset-2">
                        <h2 id="titulo" style="font-size: 70px;">Lista de Casamento</h2>
                        <p style="font-size: 25px;">Clique nos itens abaixo <i class="fa fa-arrow-down"></i> para ver a lista de presentes</p>
                        <!--<div class="service-icon">
                            <a href="lista/listaCozinha.php" target="_blank" title="Cozinha" style="color: #ff0084;" class="fa fa-cutlery"></a>
                        </div>-->
                        <div class="service-icon">
                            <a href="lista/eletrodomesticos" target="_blank" title="Eletrodom&eacute;sticos" style="color: #0063DC;" class="fa fa-plug"></a>
                        </div>
<!--                        <div class="service-icon">
                            <a href="http://lista.havan.com.br/Convidado/ItensLista/1/10268519" target="_blank" title="HAVAN" style="color: #0063DC;" class="fa fa-plug">
                                <img class="img-responsive" title="Walmart" src="images/Logo/" height="100px" width="50px" alt="">
                            </a>
                        </div>-->
                        <!--<div class="service-icon">
                            <a href="lista/listaPresentes.php" target="_blank" title="Lista Completa" style="color: #0063DC" class="fa fa-gift"></a>
                        </div>-->
                    </div>
                </div> 
            </div>
        </section>

        <section id="contato" class="contact-parlex">
            <div class="parlex-back">
                <div class="container">
                    <div class="row mrgn30">                        
                        <form method="post" action="action/emailSMTP.php" name="validate" id="contactfrm" role="form">
                            <div class="col-md-9">
                                <h3 id="titulo" style="font-size: 50px;">Nos deixe uma mensagem!</h3>
                                <div class="form-group">
                                    <label for="nome" id="titulo" style="font-size: 35px;">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" style="font-size: 30px;" title="Por favor insira seu nome"  required>
                                </div>
                                <div class="form-group">
                                    <label for="email" id="titulo" style="font-size: 35px;">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" style="font-size: 30px;" title="Por favor insira um endere&ccedil;o de e-mail v&aacute;lido">
                                    <p style="font-size: 30px; color: #F00;">*OBS: E-mail n&atilde;o obrigat&oacute;rio</p>
                                </div>
                                <div class="form-group">
                                    <label for="msg" id="titulo" style="font-size: 35px;">Coment&aacute;rios</label>
                                    <textarea name="msg" class="form-control" id="msg" cols="3" style="font-size: 30px;" placeholder="Deixe sua mensagem..." title="Por favor, digite a sua mensagem (pelo menos 10 caracteres )" required></textarea>
                                    <button name="enviar" type="submit" class="btn btn-lg btn-primary" id="enviar" style="font-size: 30px;">Enviar</button>
                                    <!--<p style="font-size: 20px; color: #F00;"><b>*OBS: Caso o E-mail n&atilde;o funcione corretamente no Firefox, 
                                            tente usar o Chrome ou Explorer</b></p>-->
                                </div>
                                <div class="result"></div>
                            </div>
                        </form>
                    </div>

                    <section id="local" class="contact-parlex">                        
                        <div class="map">
                            <h3 id="titulo" style="font-size: 50px;">Local:</h3>
                            <h4 id="titulo" style="font-size: 35px;">Av. Dom Prud&ecirc;ncio, 360 - Jundia&iacute;, An&aacute;polis - GO,75113-080, Brasil</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15315.251642652527!2d-48.94189!3d-16.332501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad927c000f3164f6!2sPar%C3%B3quia+S%C3%A3o+Francisco+de+Assis!5e0!3m2!1spt-BR!2sbr!4v1452540949087" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>			
                        </div>
                        <h3 id="titulo" style="font-size: 45px;">Vamos nos casar no dia <b>17/06/2016</b> &agrave;s <b>19:00</b> </h3><div class="countdown styled_rodape"></div>                        
                    </section>
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center" style="font-size: 28px;"><b> © Copyright <?php echo date("Y") ?> | Desenvolvido por Vin&iacute;cius Sarmento |</b></div>
                </div>
            </div>
        </section>

        <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

        <script src="js/modernizr-latest.js" type="text/javascript"></script>
        <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
        <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
        <script src="js/jquery.nav.js" type="text/javascript"></script> 
        <script src="js/jquery.fittext.js" type="text/javascript"></script> 
        <script src="js/waypoints.js" type="text/javascript"></script> 
        <script src="flexslider/jquery.flexslider.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/contagem.js" type="text/javascript"></script>
        <script src="js/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
    </body>
</html>