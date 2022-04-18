<?php require_once "../nav/header.php"; ?>
<?php require_once "../form/questions-two.php"; ?>
<?php

    if(!isset($_SESSION['token'])){
        header("Location: ".BASEURL);
    }

    if (isset($_POST['submit'])) {
        $data = [
            '2.1' => $_POST['2_1'],
            '2.2' => $_POST['2_2'],
            '2.3' => $_POST['2_3'],
            '2.4' => $_POST['2_4'],
            '2.5' => $_POST['2_5'],
            '2.6' => $_POST['2_6'],
            '2.7' => $_POST['2_7'],
            '2.8' => $_POST['2_8'],
        ];
        echo var_dump($data);


        $token = $_SESSION['token'];
        $query = " UPDATE usuarios SET `2.1` = " . $data["2.1"] .
            ", `2.2` = " . $data["2.2"] .
            ", `2.3` = " . $data["2.3"] .
            ", `2.4` = " . $data["2.4"] .
            ", `2.5` = " . $data["2.5"] .
            ", `2.6` = " . $data["2.6"] .
            ", `2.7` = " . $data["2.7"] .
            ", `2.8` = " . $data["2.8"] .
            " WHERE ID = '" . $token . "'";

        //Save the results of the form in the database
        $conn = conectarBD();
        $esUnico = true;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        desconectarBD($conn);


        //Redirect to the next page
        header("Location: ".BASEURL."/form/three.php");
    }

?>

<div class="row justify-content-center align-items-center">
    <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">

        <p class="text-center">Preguntas sobre: </p>
        <h3 class="text-center ">PROYECTO EVANGELIZADOR</h3>
        <hr class="m-4">
        <form action="two.php" method="post">
            <ol>
                <?php
                for ($i = 1; $i < count($questions2) + 1; $i++) {
                    ?>
                    <div class="form-row m-4">
                        <li>
                            <p class="m-2 fw-bold">
                                <?= $questions2[$i]['question'] ?>
                            </p>
                            <div class="d-md-flex">
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="2.<?= $i ?>" id="<?= $i ?>.4"
                                           value="<?= $questions2[$i]['answers']['no'] ?>" checked>
                                    <label class="form-check-label respuesta" for="<?= $i ?>.4">
                                        No/Nunca
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="2.<?= $i ?>" id="<?= $i ?>.3"
                                           value="<?= $questions2[$i]['answers']['poco'] ?>">
                                    <label class="form-check-label respuesta" for="<?= $i ?>.3">
                                        Poco/A veces
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="2.<?= $i ?>" id="<?= $i ?>.2"
                                           value="<?= $questions2[$i]['answers']['bastante'] ?>">
                                    <label class="form-check-label respuesta" for="<?= $i ?>.2">
                                        Bastante/Casi siempre
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="2.<?= $i ?>" id="<?= $i ?>.1"
                                           value="<?= $questions2[$i]['answers']['si'] ?>" checked>
                                    <label class="form-check-label respuesta" for="<?= $i ?>.1">
                                        Sí/Siempre
                                    </label>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php } ?>
            </ol>

            <!-- botón de siguiente -->
            <div class="m-5 text-center">
                <input type="submit" name="submit" class="btn btn-primary text-center w-100" value="Siguiente 2/5 ➡️">
            </div>


            <!-- barra de progreso -->
            <hr class="m-4">
            <div class="me-5 ms-5">
                <span>Progreso del cuestionario:</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100">40%
                    </div>
                </div>
            </div>


        </form>


    </div>
</div>


<?php require_once "../nav/footer.php"; ?>