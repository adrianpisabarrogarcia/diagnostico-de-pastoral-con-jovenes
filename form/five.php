<?php global $i18n, $lang, $questions5;
require_once "../nav/header.php"; ?>
<?php require_once "../form/questions-five.php"; ?>
<?php

if (!isset($_SESSION['token'])) {
    echo "<script> location.replace('" . BASEURL . "/'); </script>";
    exit();
}

if (isset($_POST['submit'])) {
    $data = [
        '5.1' => $_POST['5_1'],
        '5.2' => $_POST['5_2'],
        '5.3' => $_POST['5_3'],
        '5.4' => $_POST['5_4'],
        '5.5' => $_POST['5_5'],
        '5.6' => $_POST['5_6']
    ];

    $token = $_SESSION['token'];
    $query = " UPDATE usuarios SET `5.1` = " . $data["5.1"] .
        ", `5.2` = " . $data["5.2"] .
        ", `5.3` = " . $data["5.3"] .
        ", `5.4` = " . $data["5.4"] .
        ", `5.5` = " . $data["5.5"] .
        ", `5.6` = " . $data["5.6"] .
        " WHERE ID = '" . $token . "'";
    //Save the results of the form in the database
    $conn = conectarBD();
    $esUnico = true;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    desconectarBD($conn);


    //Redirect to the next page
    echo "<script> location.replace('" . BASEURL . "/results?id=" . $token . "'); </script>";
    exit();
}

?>

    <div class="row justify-content-center align-items-center">
        <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">

            <p class="text-center"><?= $i18n[$lang]['preguntasSobre'] ?></p>
            <h3 class="text-center "><?= $i18n[$lang]['tituloQuinta'] ?></h3>
            <hr class="m-4">
            <form action="five" method="post">
                <ol>
                    <?php
                    for ($i = 1; $i < count($questions5) + 1; $i++) {
                        ?>
                        <div class="form-row m-4">
                            <li>
                                <p class="m-2 fw-bold">
                                    <?= $questions5[$i]['question'][$lang] ?>
                                </p>
                                <div class="d-md-flex">
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="5.<?= $i ?>" id="<?= $i ?>.4"
                                               value="<?= $questions5[$i]['answers']['no'] ?>" checked>
                                        <label class="form-check-label respuesta" for="<?= $i ?>.4">
                                            <?= $i18n[$lang]['noNunca'] ?>
                                        </label>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="5.<?= $i ?>" id="<?= $i ?>.3"
                                               value="<?= $questions5[$i]['answers']['poco'] ?>">
                                        <label class="form-check-label respuesta" for="<?= $i ?>.3">
                                            <?= $i18n[$lang]['pocoAVeces'] ?>
                                        </label>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="5.<?= $i ?>" id="<?= $i ?>.2"
                                               value="<?= $questions5[$i]['answers']['bastante'] ?>">
                                        <label class="form-check-label respuesta" for="<?= $i ?>.2">
                                            <?= $i18n[$lang]['bastanteCasiSiempre'] ?>
                                        </label>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="5.<?= $i ?>" id="<?= $i ?>.1"
                                               value="<?= $questions5[$i]['answers']['si'] ?>">
                                        <label class="form-check-label respuesta" for="<?= $i ?>.1">
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
                    <input type="submit" name="submit" class="btn btn-primary text-center w-100"
                           value="<?= $i18n[$lang]['verResultados'] ?>">
                </div>


                <!-- barra de progreso -->
                <hr class="m-4">
                <div class="me-5 ms-5">
                    <span><?= $i18n[$lang]['progresoCuestionario'] ?></span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100">100%
                        </div>
                    </div>
                </div>


            </form>


        </div>
    </div>


<?php require_once "../nav/footer.php"; ?>