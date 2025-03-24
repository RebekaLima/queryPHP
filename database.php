<?php

    $db_server = "localhost";
    $db_username = "root";
    $db_pass = "C0rdegelo@21";
    $db_name = "clinica";
    $con = "";

    try{
        $con = mysqli_connect(
            $db_server,
            $db_username,
            $db_pass,
            $db_name
        );
    } catch(mysqli_sql_exception) {
        echo "Não foi possível conectar ao banco de dados!";
    }

?>