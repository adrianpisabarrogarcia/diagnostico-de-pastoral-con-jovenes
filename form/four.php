<?php require_once "../nav/header.php"; ?>
<?php require_once "../form/questions-four.php"; ?>
<?php

    if(!isset($_SESSION['token'])){
        echo "<script> location.replace('" . BASEURL . "/'); </script>";
        exit();
    }

    if (isset($_POST['submit'])) {
        $data = [
            '4.1.1' => $_POST['4_1_1'],
            '4.1.2' => $_POST['4_1_2'],
            '4.1.3' => $_POST['4_1_3'],
            '4.1.4' => $_POST['4_1_4'],
            '4.2.1' => $_POST['4_2_1'],
            '4.2.2' => $_POST['4_2_2'],
            '4.2.3' => $_POST['4_2_3'],
            '4.2.4' => $_POST['4_2_4'],
        ];


        $token = $_SESSION['token'];
        $query = " UPDATE usuarios SET `4.1.1` = " . $data["4.1.1"] .
            ", `4.1.2` = " . $data["4.1.2"] .
            ", `4.1.3` = " . $data["4.1.3"] .
            ", `4.1.4` = " . $data["4.1.4"] .
            ", `4.2.1` = " . $data["4.2.1"] .
            ", `4.2.2` = " . $data["4.2.2"] .
            ", `4.2.3` = " . $data["4.2.3"] .
            ", `4.2.4` = " . $data["4.2.4"] .
            " WHERE ID = '" . $token . "'";

        //Save the results of the form in the database
        $conn = conectarBD();
        $esUnico = true;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        desconectarBD($conn);


        //Redirect to the next page
        echo "<script> location.replace('" . BASEURL . "/form/five'); </script>";
        exit();
    }

?>
<div class="row justify-content-center align-items-center">
    <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">


        <form action="four" method="post">
            <!-- First form -->
            <p class="text-center">Preguntas sobre: </p>
            <h3 class="text-center ">METODOLOGÍA</h3>
            <p class="text-center fst-italic">Más concretamente sobre el:</p>
            <h4 class="text-center ">ACOMPAÑAMIENTO</h4>
            <hr class="m-4">
            <ol>
                <?php
                for ($i = 1; $i < count($questions4One) + 1; $i++) {
                    ?>
                    <div class="form-row m-4">
                        <li>
                            <p class="m-2 fw-bold">
                                <?= $questions4One[$i]['question'] ?>
                            </p>
                            <div class="d-md-flex">
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.1.<?= $i ?>" id="1.<?= $i ?>.4"
                                           value="<?= $questions4One[$i]['answers']['no'] ?>" checked>
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.4">
                                        No/Nunca
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.1.<?= $i ?>" id="1.<?= $i ?>.3"
                                           value="<?= $questions4One[$i]['answers']['poco'] ?>">
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.3">
                                        Poco/A veces
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.1.<?= $i ?>" id="1.<?= $i ?>.2"
                                           value="<?= $questions4One[$i]['answers']['bastante'] ?>">
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.2">
                                        Bastante/Casi siempre
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.1.<?= $i ?>" id="1.<?= $i ?>.1"
                                           value="<?= $questions4One[$i]['answers']['si'] ?>">
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.1">
                                        Sí/Siempre
                                    </label>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php } ?>
            </ol>

            <hr class="m-4">
            <!-- Second form -->
            <p class="text-center fst-italic">Más concretamente sobre la:</p>
            <h4 class="text-center ">PERSONALIZACIÓN</h4>
            <hr class="m-4">
            <ol>
                <?php
                for ($i = 1; $i < count($questions4Two) + 1; $i++) {
                    ?>
                    <div class="form-row m-4">
                        <li>
                            <p class="m-2 fw-bold">
                                <?= $questions4Two[$i]['question'] ?>
                            </p>
                            <div class="d-md-flex">
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.2.<?= $i ?>" id="2.<?= $i ?>.4"
                                           value="<?= $questions4Two[$i]['answers']['no'] ?>" checked>
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.4">
                                        No/Nunca
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.2.<?= $i ?>" id="2.<?= $i ?>.3"
                                           value="<?= $questions4Two[$i]['answers']['poco'] ?>">
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.3">
                                        Poco/A veces
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.2.<?= $i ?>" id="2.<?= $i ?>.2"
                                           value="<?= $questions4Two[$i]['answers']['bastante'] ?>">
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.2">
                                        Bastante/Casi siempre
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="4.2.<?= $i ?>" id="2.<?= $i ?>.1"
                                           value="<?= $questions4Two[$i]['answers']['si'] ?>">
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.1">
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
                <input type="submit" name="submit" class="btn btn-primary text-center w-100" value="Siguiente 4/5 ➡️">
            </div>


            <!-- barra de progreso -->
            <hr class="m-4">
            <div class="me-5 ms-5">
                <span>Progreso del cuestionario:</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                         aria-valuemin="0" aria-valuemax="100">80%
                    </div>
                </div>
            </div>


        </form>


    </div>
</div>


<?php require_once "../nav/footer.php"; ?>