<?php 
    header("Access-Control-Allow-Origin: *");
    echo "Olá, eu sou uma API<br/>";
    include("conexao.php");

    $minhaConexao = new conexao();
    $minhaConexao->conectar();
?>