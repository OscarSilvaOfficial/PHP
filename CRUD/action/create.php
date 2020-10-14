<?php

require_once('../databases.php');

if(isset($_POST['cadastrar'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
    if(mysqli_query($connect, $sql)){
        header('Location: ../index.php?sucesso');
    }else {
        echo '<script>console.log('.mysqli_error($connect).')</script>';
    }
}
