<?php
    session_start();    
    require_once("dbconecct.class.php");     
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, email, nome FROM usuarios WHERE email = '$email' AND senha = '$senha' "; 
    

    $conectaDb = new db();

    $link=$conectaDb->conectar_banco();

    $resultado_id = mysqli_query($link, $sql);


    if($resultado_id){
       $dados_usuarios = mysqli_fetch_array($resultado_id);
       if(isset($dados_usuarios['email'])){
           $_SESSION['email']=$dados_usuarios['email'];
           $_SESSION['nome']=$dados_usuarios['nome'];
           $_SESSION['id']=$dados_usuarios['id'];
           
                header('Location: dashboard.php');
       }
    }else{
        header('Location: index.php?erro=1');
    }
?>