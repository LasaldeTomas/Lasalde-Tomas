<?php
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $mail = $_GET['mail'];
    $clave = $_GET['clave'];

    $json_usuarios = file_get_contents('usuarios.json');
    $usuarios = json_decode($json_usuarios, true);

    $usuario_nuevo = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'mail' => $mail,
        'clave' => $clave
    ];
   
    $contador = 1;
    
    foreach($usuarios as $usuario){
        $contador++;
    }

    $usuarios[$contador] = $usuario_nuevo;

    $json_usuarios_nuevo = json_encode($usuarios);

    file_put_contents('usuarios.json', $json_usuarios_nuevo);
?>