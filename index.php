<?php require_once "./nav/header.php"; ?>
<?php

//Generar en sesión un token
//Cerrar la sesion si esta abierta
if(isset($_SESSION['token'])){
    $_SESSION["token"] = generarTokenUnico();
}

function generarTokenUnico(){
    return sha1(mt_rand(1, 90000) . 'SALT');
}

//Comprobar si el usuario envia el formulario
if (isset($_POST["submit"])) {
    //Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $movimiento = $_POST["movimiento"];

    //Comprobar si el token es único
    comprobarTokenUnico($_SESSION["token"]);

    //Insert
    insertDatosUusarioNoNull($nombre, $email, $movimiento);

    //Redireccion
    header("Location: " . BASEURL . "/form/one.php");
}


function insertDatosUusarioNoNull($nombre = "", $email = "", $movimiento = "")
{
    try {
        $conn = conectarBD();
        $stmt = $conn->prepare("INSERT INTO usuarios (ID, NOMBRE, EMAIL, MOVIMIENTO) VALUES ('" . $_SESSION["token"] . "', '" . $nombre . "', '" . $email . "', '" . $movimiento . "')");
        $stmt->execute();
        desconectarBD($conn);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function comprobarTokenUnico($token)
{
    //Comprobar si el token es único
    $conn = conectarBD();
    $esUnico = true;
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE token = '" . $token . "'");
    $stmt->execute();
    desconectarBD($conn);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($resultado) > 0) {
        $esUnico = false;
    }

    if (!$esUnico) {
        $token = generarTokenUnico();
        comprobarTokenUnico($token);
    } else {
        $_SESSION["token"] = $token;
    }
}

?>

    <div class="row justify-content-center align-items-center minh-100">
        <div class="p-3 p-md-5 m-5 col-10 col-md-5 rounded " id="scuare">
            <div class="mb-5">
                <h1 class="text-center">HERRAMIENTA</h1>
                <h2 class="text-center">DIAGNÓSTICO PASTORAL</h2>
                <h1 class="text-center">CON JÓVENES</h1>
            </div>
            <form action="index.php" method="post" name="form-comienzo">
                <div class="form-group mb-3 text-center">
                    <label for="nombre" class="mb-2">🙋‍♀️&nbsp;Tu nombre </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pepe" required>
                </div>
                <div class="form-group mb-3 text-center">
                    <label for="email" class="mb-2">✉️&nbsp;Correo electrónico </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@ejemplo.com"
                           required>
                </div>
                <div class="form-group mb-3 text-center">
                    <label for="movimiento" class="mb-2">⛪️&nbsp;Movimiento al que perteneces </label>
                    <input type="text" class="form-control" id="movimiento" placeholder="Escolapios" name="movimiento"
                           required>
                </div>
                <div class="mt-3">
                    <input type="submit" name="submit" class="btn btn-primary text-center w-100"
                           value="¡COMENZAR AHORA!">
                </div>
            </form>
        </div>
    </div>

<?php require_once './nav/footer.php'; ?>