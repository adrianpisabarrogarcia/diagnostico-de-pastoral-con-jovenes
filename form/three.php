<?php global $i18n, $lang, $questions3One, $questions3Two;
require_once "../nav/header.php"; ?>
<?php require_once "../form/questions-three.php"; ?>
<?php

    if(!isset($_SESSION['token'])){
        echo "<script> location.replace('" . BASEURL . "/'); </script>";
        exit();
    }

    if (isset($_POST['submit'])) {
        $data = [
            '3.1.1' => $_POST['3_1_1'],
            '3.1.2' => $_POST['3_1_2'],
            '3.1.3' => $_POST['3_1_3'],
            '3.1.4' => $_POST['3_1_4'],
            '3.2.1' => $_POST['3_2_1'],
            '3.2.2' => $_POST['3_2_2'],
            '3.2.3' => $_POST['3_2_3'],
            '3.2.4' => $_POST['3_2_4'],
            '3.2.5' => $_POST['3_2_5'],
            '3.2.6' => $_POST['3_2_6'],
        ];


        $token = $_SESSION['token'];
        $query = " UPDATE usuarios SET `3.1.1` = " . $data["3.1.1"] .
            ", `3.1.2` = " . $data["3.1.2"] .
            ", `3.1.3` = " . $data["3.1.3"] .
            ", `3.1.4` = " . $data["3.1.4"] .
            ", `3.2.1` = " . $data["3.2.1"] .
            ", `3.2.2` = " . $data["3.2.2"] .
            ", `3.2.3` = " . $data["3.2.3"] .
            ", `3.2.4` = " . $data["3.2.4"] .
            ", `3.2.5` = " . $data["3.2.5"] .
            ", `3.2.6` = " . $data["3.2.6"] .
            " WHERE ID = '" . $token . "'";

        //Save the results of the form in the database
        $conn = conectarBD();
        $esUnico = true;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        desconectarBD($conn);


        //Redirect to the next page
        echo "<script> location.replace('" . BASEURL . "/form/four'); </script>";
        exit();
    }

?>
<div class="row justify-content-center align-items-center">
    <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">


        <form action="three.php" method="post">
            <!-- First form -->
            <p class="text-center"><?= $i18n[$lang]['preguntasSobre'] ?></p>
            <h3 class="text-center "><?= $i18n[$lang]['tituloSegundaPregunta'] ?></h3>
            <p class="text-center fst-italic"><?= $i18n[$lang]['preguntasConcretamente'] ?></p>
            <h4 class="text-center "><?= $i18n[$lang]['tituloTerceraPreguntaUno'] ?></h4>
            <hr class="m-4">
            <ol>
                <?php
                for ($i = 1; $i < count($questions3One) + 1; $i++) {
                    ?>
                    <div class="form-row m-4">
                        <li>
                            <p class="m-2 fw-bold">
                                <?= $questions3One[$i]['question'][$lang] ?>
                            </p>
                            <div class="d-md-flex">
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.1.<?= $i ?>" id="1.<?= $i ?>.4"
                                           value="<?= $questions3One[$i]['answers']['no'] ?>" checked>
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.4">
                                        <?= $i18n[$lang]['noNunca'] ?>
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.1.<?= $i ?>" id="1.<?= $i ?>.3"
                                           value="<?= $questions3One[$i]['answers']['poco'] ?>">
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.3">
                                        <?= $i18n[$lang]['pocoAVeces'] ?>
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.1.<?= $i ?>" id="1.<?= $i ?>.2"
                                           value="<?= $questions3One[$i]['answers']['bastante'] ?>">
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.2">
                                        <?= $i18n[$lang]['bastanteCasiSiempre'] ?>
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.1.<?= $i ?>" id="1.<?= $i ?>.1"
                                           value="<?= $questions3One[$i]['answers']['si'] ?>">
                                    <label class="form-check-label respuesta" for="1.<?= $i ?>.1">
                                        <?= $i18n[$lang]['siSiempre'] ?>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php } ?>
            </ol>

            <hr class="m-4">
            <!-- Second form -->
            <p class="text-center fst-italic"><?= $i18n[$lang]['preguntasConcretamente'] ?></p>
            <h4 class="text-center "><?= $i18n[$lang]['tituloTerceraPreguntaDos'] ?></h4>
            <hr class="m-4">
            <ol>
                <?php
                for ($i = 1; $i < count($questions3Two) + 1; $i++) {
                    ?>
                    <div class="form-row m-4">
                        <li>
                            <p class="m-2 fw-bold">
                                <?= $questions3Two[$i]['question'][$lang] ?>
                            </p>
                            <div class="d-md-flex">
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.2.<?= $i ?>" id="2.<?= $i ?>.4"
                                           value="<?= $questions3Two[$i]['answers']['no'] ?>" checked>
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.4">
                                        <?= $i18n[$lang]['noNunca'] ?>
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.2.<?= $i ?>" id="2.<?= $i ?>.3"
                                           value="<?= $questions3Two[$i]['answers']['poco'] ?>">
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.3">
                                        <?= $i18n[$lang]['pocoAVeces'] ?>
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.2.<?= $i ?>" id="2.<?= $i ?>.2"
                                           value="<?= $questions3Two[$i]['answers']['bastante'] ?>">
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.2">
                                        <?= $i18n[$lang]['bastanteCasiSiempre'] ?>
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="3.2.<?= $i ?>" id="2.<?= $i ?>.1"
                                           value="<?= $questions3Two[$i]['answers']['si'] ?>">
                                    <label class="form-check-label respuesta" for="2.<?= $i ?>.1">
                                        <?= $i18n[$lang]['siSiempre'] ?>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php } ?>
            </ol>






            <!-- botón de siguiente -->
            <div class="m-5 text-center">
                <input type="submit" name="submit" class="btn btn-primary text-center w-100" value="<?= $i18n[$lang]['siguiente'] ?> 3/5 ➡️">
            </div>


            <!-- barra de progreso -->
            <hr class="m-4">
            <div class="me-5 ms-5">
                <span><?= $i18n[$lang]['progresoCuestionario'] ?></span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60"
                         aria-valuemin="0" aria-valuemax="100">60%
                    </div>
                </div>
            </div>


        </form>


    </div>
</div>


<?php require_once "../nav/footer.php"; ?>