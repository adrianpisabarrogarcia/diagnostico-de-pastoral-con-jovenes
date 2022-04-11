<?php require_once './nav/header.php'; ?>
<?php


    //Comprobar si el usuario envia el formulario
    if(isset($_POST['form-comienzo'])){

        echo "Entra aqui";

        //Recoger los datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $movimiento = $_POST['movimiento'];
        $token = $_SESSION['token'];

        //Insert
        $sql = "INSERT INTO usuarios (TOKEN, NOMBRE, EMAIL, MOVIMIENTO) VALUES ('" . $token . "', '" . $nombre . "', '" . $email . "', '" . $movimiento . "')";
        $conn = conectarBD();

        if(mysqli_query($conn, $sql)){
            header('Location: /form/one.php');
        }else{
            //echo "Error, contacte con el administrador redpj@rpj.es";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        desconectarBD($conn);
    }
?>





<div class="p-5 m-5 col-10 col-md-5 rounded" id="scuare">
        <div class="mb-5">
                <h1 class="text-center">HERRAMIENTA</h1>
                <h2 class="text-center">DIAGNÓSTICO PASTORAL</h2>
                <h1 class="text-center">CON JÓVENES</h1>
        </div>
        <form method="post" action="./index.php" name="form-comienzo">
                <div class="form-group mb-3 text-center">
                        <label for="nombre" class="mb-2">🙋‍♀️&nbsp;Tu nombre </label>
                        <input type="text" class="form-control" id="nombre" placeholder="Pepe" required>
                </div>
                <div class="form-group mb-3 text-center">
                        <label for="email" class="mb-2">✉️&nbsp;Correo electrónico </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@ejemplo.com" required>
                </div>
                <div class="form-group mb-3 text-center">
                        <label for="movimiento" class="mb-2">⛪️&nbsp;Movimiento al que perteneces </label>
                        <input type="text" class="form-control" id="movimiento" placeholder="Escolapios" name="movimiento" required>
                </div>
                <div class="m-5">
                        <input type="submit" class="btn btn-primary text-center w-100" value="¡COMENZAR AHORA!">
                </div>
        </form>
</div>

<?php require_once './nav/footer.php'; ?>