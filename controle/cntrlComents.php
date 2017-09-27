<?php

require '../persistencia/Conexao.class.php';
require '../persistencia/ComentsDAO.php';
require '../persistencia/ComentsVO.php';

if (isset($_POST['enviar'])) {

    $coments = $_POST['coments'];
    $nome = $_POST['nome'];
    
    $post = new ComentsVO();

    utf8_decode($post->setComents($coments));
    utf8_decode($post->setNome($nome));

    $comentsDAO = new ComentsDAO();
    $id = $comentsDAO->inserirComents($post);
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
    alert("Comentário realizado com sucesso");
//    window.location.href = 'http://localhost:8080/eventos/CasamentoV_A/index.php#comentarios';
    window.location.href = 'http://vanessaeanderson.com.br/#comentarios';
</script>