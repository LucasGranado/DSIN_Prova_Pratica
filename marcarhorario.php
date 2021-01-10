<?php
 session_start();    
    require_once("dbconecct.class.php");
    
    $nome  = $_POST['nome'];
    $data = $_POST['data'];
    $servico = $_POST['hora'];
    $servico = $_POST['servico'];
    $sexo = $_POST['sexo'];

    $conectaDb = new db();
    $link=$conectaDb->conectar_banco();

    $dataatual = date('Y/m/d');
    $diferenca = strtotime($data) - strtotime($dataatual);
    $dias = floor($diferenca / (60 * 60 * 24)); 

    

    if( $dias > 2){
        
        $idusuario = $_SESSION['id'] ;
        $sql = "insert into atendimento(nome, data, hora, servico, sexo, idUsuario) values ('$nome', '$data', '$hora', '$servico', '$sexo','$idusuario')";

        if(mysqli_query($link, $sql)){
            header('Location: marcar.php');
        }else{
            echo'falhou';
        }
    }else{
        header('Location: erromarcar.php');
    }
