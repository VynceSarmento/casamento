<?php

//use PDO;

//class Conexao {
//
//    static function getConexao() {
//
//        $local = "localhost";
//        $usuar = "root";
//        $senha = "";
//        $banco = "vanessaeanderson";
//
//        $con = mysqli_connect($local, $usuar, $senha, $banco);
//        if (mysqli_error($con)) {
//            return "Erro ao conectar o banco de dados da integração";
//        }
//
//        return $con;
//    }
//
//}

class Conexao {

    static function getConexao() {

        $local = "179.188.16.36";
        //$host = "179.188.16.36";
        $usuar = "vanessaeanderson";
        $senha = "V4n34nd3r";
        $banco = "vanessaeanderson";

        $con = mysqli_connect($local, $usuar, $senha, $banco);
        if (mysqli_error($con)) {
            return "Erro ao conectar o banco de dados da integração";
        }

        return $con;
    }

}

?>
