<?php
require_once("include/conexao.php");
require_once("include/func.php");

//captura os dados vindos do formul�rio HTML
$id = trim($_REQUEST["id"]);
$resposta = trim($_POST["resposta"]);
$data_enq = date("d/m/Y");
$dat = explode("/", $data_enq);
$data_enq = "{$dat[2]}-{$dat[1]}-{$dat[0]}";
$mod_aplicacao = "Enquete da Semana";
$situacao = "Ativa";
$msgl = trim($_REQUEST["msg"]);

//verifica se foi postado o formul�rio de inser��o
if (isset($_POST['bt_Votar'])) {
    try {
        $con = conexao();
        if (!preenchido($id, $resposta))
            throw new Exception('Voce nao preencheu os campos corretamente<br />');

        $result = $con->query("INSERT INTO respostas(codEnquete,resposta) VALUES('$id','$resposta')");

        if (!$result)
            throw new Exception('Problemas: ' . $con->errno . ' --- ' . $con->error . '<br />');
        else
            $msg = "Voto Computado!";
        unset($id, $resposta);
    } catch (Exception $e) {
        //caso haja uma exce��o � mensagem � capturada e atribu�da a $msg
        $msg = $e->getMessage();
    }
}

try {
    $con = conexao();

    $results3 = $con->query("SELECT * FROM enquetes WHERE mod_aplicacao='$mod_aplicacao' and situacao='$situacao'");
    if (!$results3)
        throw new Exception('Problemas: ' . $con->errno . ' --- ' . $con->error . '<br />');
} catch (Exception $e) {
    //caso haja uma exce��o � mensagem � capturada e atribu�da a $msg
    $msg = $e->getMessage();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>UniVIRTU@L - Coordenadoria de Educa&ccedil;&atilde;o a Dist&acirc;ncia.</title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="images/estilo.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/form.css" />
        <script language="javascript" type="text/javascript">
            function clearText(field)
            {
                if (field.defaultValue == field.value)
                    field.value = '';
                else if (field.value == '')
                    field.value = field.defaultValue;
            }
        </script>
        <script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    </head>

    <body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <div id="header">		

                <!--header ends-->					
            </div>

            <!-- navigation starts-->	
            <div  id="nav">
                <ul>
                    <li id="current"><a href="faleconosco.php">Fale conosco</a></li>			
                    <li><a href="galeria.php">Galeria de Fotos</a></li>
                    <li><a href="disciplina.php">Disciplinas Semipresenciais</a></li>
                    <li><a href="index.php">Home</a></li>	
                </ul>
                <!-- navigation ends-->	
            </div>

            <!-- content-wrap starts -->
            <div id="content-wrap" class="three-col">	

                <div class="templatemo_box">
                    <h2><span></span>Institucional</h2> 
                    <div class="body">
                        <ul class="side_menu">
                            <li><a href="historico.php">Historico</a></li>
                            <li><a href="links_ead.php">Links de EAD</a></li>
                            <li><a href="legislacao.php">Legislacao em EAD</a></li>
                            <li><a href="http://www.unievangelica.edu.br/gc/index.php?pag=lyceumAlunoForm.php" target="_blank">Lyceum Aluno On-Line</a></li>
                            <li><a href="http://www.unievangelica.edu.br/gc/index.php?pag=lyceumProfessorForm.php" target="_blank">Lyceum Professor On-Line</a></li>           
                        </ul>
                    </div>

                    <div class="box_bottom"><span></span></div>

                    <h2><span></span>Enquete</h2> 
                    <div class="body">
                        <?php
                        try {
                            if ($results3->num_rows == 0)
                                throw new Exception('N�o existe enquete cadastrada para esta semana.<br />');
                            while ($row = $results3->fetch_assoc()) :
                                ?><form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $row['codEnquete'] ?>" method="post">
                                    <center><strong><?php echo $row['questao'] ?></strong></center>
                                    <br />
                                    <?php
                                    $cod = $row['codEnquete'];
                                    $results4 = $con->query("SELECT * FROM opcoes WHERE codEnquete='$cod'");

                                    if ($results4 === FALSE)
                                        throw new Exception('Problemas: ' . $con->errno . ' --- ' . $con->error . '<br />');
                                    try {
                                        if ($results4->num_rows == 0)
                                            throw new Exception('Nao existem dados cadastrados no momento. <br />');

                                        while ($row1 = $results4->fetch_assoc()):
                                            ?>
                                            <label>
                                                <input type="radio" name="resposta" value="<?php echo $row1['opcao'] ?>" id="resposta" />
                                                <?php echo $row1['opcao'] ?></label><br /><?php
                                            endwhile;
                                            ?>
                                        <?php
                                        $results4->close();
                                    } catch (Exception $e) {
//caso haja uma exce��o � mensagem � exibida em echo
                                        echo $e->getMessage();
                                    }
                                    ?>
                                    <br />
                                    <center>
                                        <input name="bt_Votar" type="submit" class="button" value="Votar" id="bt_Votar" /><input name="bt_Resultado" type="submit" class="button" onclick="window.open('resultado.php?codEnquete=<?php echo $row['codEnquete'] ?>', 'Janela', 'toolbar=false,location=no,directories=false,status=false,menubar=false,scrollbars=false,resizable=false,width=430,height=270'); return false;" value="Resultado" id="bt_Resultado" />
                                    </center>
                                    <center>
        <?php
        if (isset($msg))
            echo $msg;
        ?>
                                    </center>
                                </form><?php
                            endwhile;
                        } catch (Exception $e) {
//caso haja uma exce��o � mensagem � exibida em echo
                            echo $e->getMessage();
                        }
//fecha os resultados
                        $results3->close();
//fecha a conex�o
//$con->close( );
?>
                    </div>

                    <div class="box_bottom"><span></span></div>

                    <h2><span></span>Conte&&uacute;do</h2> 
                    <div class="body">
                        <ul class="side_menu">
                            <li><a href="artigos.php">Artigos</a></li>				
                            <li><a href="enquetes.php">Enquetes</a></li>
                            <li><a href="eventos.php">Eventos</a></li>
                            <li><a href="informativos.php">Informativos</a></li>
                            <li><a href="links.php">Links</a></li>
                            <li><a href="noticias.php">Not&&iacute;cias</a></li>        
                        </ul>
                    </div>

                    <div class="box_bottom"><span></span></div>

                    <h2><span></span>Manuais</h2> 
                    <div class="body">
                        <ul class="side_menu">
                            <li><a href="http://univirtual.unievangelica.edu.br/moodle/file.php/1/manual%20do%20aluno.pdf" target="_blank">Manual do Aluno em PDF</a></li>
                            <li><a href="http://univirtual.unievangelica.edu.br/moodle/file.php/1/manual/index.html" target="_blank">Manual do Aluno em EBOOK</a></li>           
                        </ul>
                    </div>

                    <div class="box_bottom"><span></span></div>

                </div>

                <div class="rightcolumn_box">

                    <h2><span></span>UniVIRTUAL</h2> 
                    <div class="body">
                        <form action="login.php" method="post">
                            <div id="my">
                                <label>Matr�cula:</label>
                                <input name="usuario" type="text" id="usuario" maxlength="10" onfocus="clearText(this)" onblur="clearText(this)" value="Matr�cula." />

                                <label>Senha:</label>
                                <input name="senha" type="password" maxlength="10" id="senha" onfocus="clearText(this)" onblur="clearText(this)" value="Senha." />

                                <label>Usu�rio:</label><br />
                                <select name="tipo" id="tipo">
                                    <option selected="selected">Selecione</option>
                                    <option value="Acad&ecirc;mico">Acad&ecirc;mico</option>
                                    <option value="Docente">Docente</option>
                                    <option value="Suporte">Suporte</option>
                                </select>
                                <br />
                            </div>
                            <center><?php if (isset($msgl)) {
                            echo $msgl;
                        }
?></center>
                            <br />
                            <center><input name="btLogar" type="submit" id="btLogar" value="Logar" title="Clique aqui para efetuar seu login." /></center>
                        </form>
                    </div>

                    <div class="box_bottom"><span></span></div>

                    <h2><span></span>Moodle</h2> 
                    <div class="body">
                        <center><img src="images/logomoodle.jpg" /><br /><br /><a href="http://univirtual.unievangelica.edu.br/moodle" target="_blank">Clique aqui para acessar!</a></center>
                    </div>

                    <div class="box_bottom"><span></span></div>

                    <h2><span></span>Coordena��o</h2> 
                    <div class="body">
                        <center>Prof�. Ms. Greice Helen de Melo Silva<br /><br />
                            Coordenadora do UniVIRTUAL<br /><br />
                            E-mail: greiceh@unievangelica.edu.br</center>
                    </div>

                    <div class="box_bottom"><span></span></div>

                    <h2><span></span>Suporte</h2> 
                    <div class="body">
                        <center>
                            Lucas de Oliveira Medeiro<br /><br />
                            T�cnico de Inform�tica do Portal UniVIRTUAL<br /><br />
                            E-mail e MSN: suporte.univirtual@hotmail<br />.com
                        </center>
                    </div>

                    <div class="box_bottom"><span></span></div>
                </div>

                <div id="main">
                    <p></p>
                    <p></p>
                    <p></p>
                    <br /><br />
                    <table bgcolor="#21296c" width="535" height="300" align="center">
                        <tr>
                            <td><script type="text/javascript">
                                AC_FL_RunContent('codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0', 'width', '535', 'height', '300', 'src', 'images/banner', 'quality', 'high', 'pluginspage', 'http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash', 'movie', 'images/banner'); //end AC code
                                </script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="535" height="300">
                                        <param name="movie" value="images/banner.swf" />
                                        <param name="quality" value="high" />
                                        <embed src="images/banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="535" height="300"></embed>
                                    </object></noscript></td>
                        </tr>
                    </table>
                    <br />

                    <h1>Fale conosco</h1>
                    <br />
                    <?php
// Captura os dados do form:
                    $contato = "suporte.univirtual@hotmail.com"; // Email do destino.
                    @$nome = $_POST["nome"];
                    @$email = $_POST["email"];
                    @$assunto = $_POST["assunto"];
                    @$messagem = $_POST["messagem"];

// Testa a a��o do sistema:
                    if (isset($_POST['btEnviar'])) {

                        // Envia o email:
                        @mail("$contato", "$assunto", "$messagem", "From: $nome<$email>");

                        echo "<br><br><br><br><b><center>";
                        echo "$nome, sua mensagem foi enviada com sucesso,<br>em breve entraremos em contato.<br><br><a href='faleconosco.php'>voltar</a>";
                        echo "</center></b>";
                    } else {
                        ?>		

                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">		
                            <div id="my">				
                                <p align="justify">Para entrar em contato conosco basta preencher o formul�rio abaixo. Envie-nos uma mensagem em breve entraremos em contato com voc�. Os campos contendo este (*) s�mbolo n�o podem ser deixados em branco.</p>	
                                <p>	
                                    <br />

                                    <label>* Nome:</label><br />
                                    <input id="nome" name="nome" type="text" tabindex="2" title="Informe seu nome." />

                                    <label>* E-mail:</label><br />
                                    <input id="email" name="email" type="text" tabindex="3" title="Informe seu e-mail." />

                                    <label>* Assunto:</label><br />
                                    <input id="assunto" name="assunto" type="text" tabindex="3" title="Informe o assunto." />

                                    <label>* Mensagem:</label><br />
                                    <textarea id="messagem" name="messagem" rows="15" cols="20" tabindex="4" title="Digite sua mensagem."></textarea>
                                </p>	
                            </div>
                            <p class="no-border" align="center">
                                <input type="submit" id="btEnviar" name="btEnviar" tabindex="5" value="Enviar Mensagem" />
                            </p>

                        </form>

    <?php
    // Fecha a condi��o.
}
?>
                </div>

                <!-- footer starts -->			
                <div id="footer-wrap"><div id="footer">				

                        <p>
                            &copy; 2009 Todos os direitos reservados. | <strong>UniVIRTU@L - Coordenadoria de Educa��o a Dist�ncia.</strong>
                        </p>		

                    </div></div>
                <!-- footer ends-->

                <!-- wrap ends here -->
            </div>
    </body>
</html>
