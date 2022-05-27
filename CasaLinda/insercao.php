<?php
    include ("connectDB.php");

    $sql_code = "INSERT INTO PRODUTOS VALUES ('0001', 'Abajur', 'Ascende', 'Sala de Estar', 'TikTok', '10.0', '500.0')";
    $sql_query = $mysqli->query($sql_code) or die("Erro de inserção" . $mysqli->error);

    $sql_code = "INSERT INTO PRODUTOS VALUES ('0002', 'Mesa', 'Apoio', 'Sala de Jantar', 'TikTok', '10.0', '500.0')";
    $sql_query = $mysqli->query($sql_code) or die("Erro de inserção" . $mysqli->error);

    $sql_code = "INSERT INTO PRODUTOS VALUES ('0003', 'Pia', 'Apoio', 'Banheiro', 'Casas Bahia', '100.0', '250.0')";
    $sql_query = $mysqli->query($sql_code) or die("Erro de inserção" . $mysqli->error);

?>
