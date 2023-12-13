<?php


function parametrosConexion(){
    return [
        "host" => "mysql:3306",
        "database" => "diagnosticopastoral",
        "username" => "root",
        "password" => "example"
    ];
}

function conectarBD(){
    try {
        $conexion = new PDO("mysql:host=".parametrosConexion()["host"].";dbname=".parametrosConexion()["database"], parametrosConexion()["username"], parametrosConexion()["password"]);
        return $conexion;
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }catch (Exception $e){
        echo "Error: " . $e->getMessage();
    }
    return null;
}


function desconectarBD($conexion){
    $conexion = null;
}



?>
