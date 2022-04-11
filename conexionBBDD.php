<?php


function parametrosConexion(){
    return [
        "servername" => "localhost",
        "database" => "databasename",
        "username" => "username",
        "password" => "password"
    ];
}

function conectarBD(){
    $datosConexion = parametrosConexion();
    $conexion = mysqli_connect($datosConexion["servername"], $datosConexion["username"], $datosConexion["password"], $datosConexion["database"]);
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conexion;
}


function desconectarBD($conexion){
    mysqli_close($conexion);
}



?>
