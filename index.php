<?php global $i18n, $lang;
require_once "./nav/header.php"; ?>
<?php


//Generar en sesión un token nuevo en el index.php
$_SESSION["token"] = generarTokenUnico();

function generarTokenUnico(){
    return sha1(mt_rand(1, 90000) . 'SALT');
}

//echo $_SESSION["token"];

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
    echo "<script> location.replace('" . BASEURL . "/form/one'); </script>";
    exit();
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
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = '" . $token . "'");
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
        <div class="p-3 p-md-5 col-10 col-md-5 rounded" id="scuare">
            <div class="d-flex justify-content-center m-2">
                <img style="width: 30%" src="<?php echo BASEURL; ?>/assets/img/logo.jpg">
            </div>
            <div class="mb-5">
                <h1 class="text-center"><?= $i18n[$lang]['herramienta'] ?></h1>
                <h2 class="text-center"><?= $i18n[$lang]['diagnosticoPastoral'] ?></h2>
                <h1 class="text-center"><?= $i18n[$lang]['conJovenes'] ?></h1>
                <p class="text-center">
                    <?= $i18n[$lang]['preguntaInicio'] ?>
                </p>
            </div>
            <div class="text-center">

            </div>
            <form action="index" method="post" name="form-comienzo">
                <div class="form-group mb-3 text-center">
                    <label for="nombre" class="mb-2"><?= $i18n[$lang]['tuNombre'] ?></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pepe" required>
                </div>
                <div class="form-group mb-3 text-center">
                    <label for="email" class="mb-2"><?= $i18n[$lang]['tuEmail'] ?></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="<?= $i18n[$lang]['emailEjemplo'] ?>"
                           required>
                </div>
                <div class="form-group mb-3 text-center">
                    <label for="movimiento" class="mb-2"><?= $i18n[$lang]['tuMovimiento'] ?></label>
                    <input type="text" class="form-control" id="movimiento" placeholder="Escolapios" name="movimiento"
                           required>
                </div>
                <div class="mt-3">
                    <input type="submit" name="submit" class="btn btn-primary text-center w-100 font-weight-bold"
                           value="<?= $i18n[$lang]['bComenzar'] ?>">
                </div>
            </form>
        </div>
    </div>

<?php require_once './nav/footer.php'; ?>

