<?php   
    require_once("dbconecct.class.php");     
    

    $sql = "SELECT B.* FROM usuarios AS A INNER JOIN atendimento AS B ON a.id = b.idUsuario WHERE B.idUsuario = ".$_SESSION['id']; 
    

    $conectaDb = new db();

    $link=$conectaDb->conectar_banco();

    $resultado_id = mysqli_query($link, $sql);


    if($resultado_id){

        for($i = 0; $array[$i] = mysqli_fetch_assoc($resultado_id); $i++) ;

       
    }else{
        header('Location: index.php?erro=1');
    }
