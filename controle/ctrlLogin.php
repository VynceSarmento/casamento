<?php

session_start();

require_once ('../persistencia/LoginDAO.class.php');
require_once ('../persistencia/LoginVO.class.php');
require_once ('../persistencia/Conexao.class.php');

$acao = (isset($_POST['acao'])) ? addslashes($_POST['acao']) : '';
if ($acao == 'login') {

    $email = addslashes($_POST["email"]);
    $senha = MD5(addslashes($_POST["senha"]));
    try {
        $loginVO = new LoginVO();
        $loginVO->setEmail($email);
        $loginVO->setSenha($senha);
        $loginDAO = new LoginDAO();

        $NovoUsuario = $loginDAO->entrar($loginVO);

        if ($NovoUsuario->getIdLogin() <= 0) {
            ?>
            <script>
                alert("E-mail ou Senha Invalidos");
                //window.location.href = '/site/home-cursos/nai/atividadesInternacionais/index.php';
                window.location.href = '../login.php';
            </script>
            <?php
            //echo "Usu&aacute;rio ou Senha Inv&aacute;lida";
        } else {
            $_SESSION["idLogin"] = $NovoUsuario->getIdLogin();
            $_SESSION["email"] = $NovoUsuario->getEmail();
            $_SESSION["nome"] = $NovoUsuario->getNome();

            
            ?>
            <script>
                //window.location.href = '/site/home-cursos/nai/atividadesInternacionais/inicio.php';
                window.location.href = '../casamentoVA.php';
            </script>
            <?php
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}  else {
    header("Location: ../login.php");
}
?>
