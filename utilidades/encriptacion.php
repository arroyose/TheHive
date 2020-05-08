<?php

     /**
     * Funcion para encriptar las claves de usuario a traves de  BCRYPT a 12.
     * esta funcion basada en BCRYPT, devolvera siempre  la pass 
     * encriptada en 60 caracteres.
     */
    function encriptar($pass)
    {
    $opciones = [
        'cost' => 12,
    ];
        return password_hash($pass, PASSWORD_BCRYPT, $opciones);
    }
    
    function encriptar1($pass){
        return password_hash( $pass, PASSWORD_DEFAULT);
    }
?>