<?php
    require_once("dbconecct.class.php");
    
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone']; 

    $conectaDb = new db();
    $link=$conectaDb->conectar_banco();

    $sql = "insert into usuarios(nome, email, senha, telefone) values ('$nome', '$email', '$senha', '$telefone')";

    if(mysqli_query($link, $sql)){
        header('Location: marcar.php');
    }else{
        echo'falhou';
    }
