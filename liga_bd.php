<?php
    $servidor="localhost";
    $utilizador="id22264268_felipe";
    $senha="kovwon-hezsyG-raksu3";
    $bd="id22264268_bd_biblioteca";
    //criar a variavel ligacao (1º ip do servidor, 2º nome do utilizador)
    // (3º senha por defeito vazia, e 4º nome da base de dados)   
    $ligacao = mysqli_connect($servidor,$utilizador,$senha,$bd);
    // tento executar a ligação ao meu servidor
    if ($ligacao->connect_error)
        die(mysqli_error($ligacao));
 ?>