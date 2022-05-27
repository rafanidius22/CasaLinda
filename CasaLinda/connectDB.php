<?php
    $hostname = "localhost";
    $bancodedados = "casalinda";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);
        if($mysqli->connect_errno)
            die("falha ao conectar ". $mysqli->error);
?>