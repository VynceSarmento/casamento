<?php

class LoginDAO {

    function entrar(LoginVO $log) {
        $con = Conexao::getConexao();

        $sql = "SELECT * FROM usuario WHERE email='" . $log->getEmail() . "' AND senha='" . $log->getSenha() . "' AND situacao='1'";

        $executou = $con->query($sql);      

        if (!$executou) {
            throw new Exception('Erro ao consultar os dados - SQL');
        }
        
        if ($executou) {
            $linhaUser = mysqli_fetch_array($executou);

            $log = new LoginVO();
            $log->setIdLogin($linhaUser['idLogin']);
            $log->setNome($linhaUser['nome']);
            $log->setEmail($linhaUser['email']);
            $log->setSenha($linhaUser['senha']);
            $log->setSituacao($linhaUser['situacao']);

            return $log;
        } else {
            return false;
        }
    }
}

?>
