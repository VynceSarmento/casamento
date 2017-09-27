<?php

class ComentsDAO {

    function inserirComents(ComentsVO $coment) {
        $con = Conexao::getConexao();

        $sql = "INSERT INTO postagem (coments, nome, data, hora) "
                . "VALUES ('" . utf8_decode($coment->getComents()). "', '".  utf8_decode($coment->getNome())."', NOW(), NOW())";

        $executou = $con->query($sql);
        $idComents = mysqli_insert_id($con);
        if (!$executou) {
            return false;
        } else {
            return $idComents;
        }
    }

    function buscarComents() {
        $con = Conexao::getConexao();
        $sql = "SELECT * FROM postagem ORDER BY idComents DESC";

        $executou = $con->query($sql);
        if (!$executou) {
            throw new Exception('Erro ao consultar os dados - SQL');
        }

        if ($executou) {
            $arrayDados = array();

            while ($linhaDados = mysqli_fetch_array($executou)) {
                $formBusca = new ComentsVO();

                $formBusca->setIdComents($linhaDados['idComents']);
                $formBusca->setComents(utf8_encode($linhaDados['coments']));
                $formBusca->setNome(utf8_encode($linhaDados['nome']));
                $formBusca->setData($linhaDados['data']);
                $formBusca->setHora($linhaDados['hora']);
                $arrayDados[] = $formBusca;
            }
            return $arrayDados;
        }
        return false;
    }

}
