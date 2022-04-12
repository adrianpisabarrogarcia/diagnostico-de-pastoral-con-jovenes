<?php


function parametrosConexion(){
    return [
        "host" => "192.168.64.2:3306",
        "database" => "diagnosticopastoral",
        "username" => "username",
        "password" => "password"
    ];
}

function conectarBD(){
    try {
        $conexion = new PDO("mysql:host=".parametrosConexion()["host"].";dbname=".parametrosConexion()["database"], parametrosConexion()["username"], parametrosConexion()["password"]);
        return $conexion;
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return null;
}


function desconectarBD($conexion){
    $conexion = null;
}



?>
