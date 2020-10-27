<?php
    $mail = $_POST['mail'];
    $clave = $_POST['clave'];
    
    $json_usuarios = file_get_contents('usuarios.json');
    $usuarios = json_decode($json_usuarios, true);
    
    foreach($usuarios as $usuario){
        if( $usuario['mail'] == $mail && $usuario['clave'] == $clave){
            echo'Hola '.$usuario['nombre'];
        }
    }
?>