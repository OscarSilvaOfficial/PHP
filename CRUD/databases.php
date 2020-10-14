<?php

$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = 'crud';

$connect = mysqli_connect($server, $user, $pass, $db);


if(mysqli_connect_error()):
    echo "<script>console.log(Erro na conexão com o banco".mysqli_connect_error().")</script>";
endif;
