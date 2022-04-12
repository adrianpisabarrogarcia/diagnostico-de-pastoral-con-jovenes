<?php require_once "../nav/header.php"; ?>

<div class="row justify-content-center align-items-center">
    <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">

        <p class="text-center">Preguntas sobre: </p>
        <h3 class="text-center ">EL EQUIPO DE TRABAJO</h3>
        <hr class="m-4">
        <form action="one.php">
            <ol>
                <?php
                for ($i = 0; $i < 30; $i++) {
                    ?>
                    <div class="form-row m-4">
                        <li>
                            <p class="m-2 fw-bold">Hay un <u>equipo</u> de “pastoral con jóvenes” definido: composición,
                                funciones y reuniones de trabajo con
                                una periodicidad mensual mínima.
                            </p>
                            <div class="d-md-flex">
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="1.1" id="1.4" value="0" checked>
                                    <label class="form-check-label respuesta" for="1.4">
                                        No/Nunca
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="1.1" id="1.3" value="0.75">
                                    <label class="form-check-label respuesta" for="1.3">
                                        Poco/A veces
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="1.1" id="1.2" value="1.75">
                                    <label class="form-check-label respuesta" for="1.2">
                                        Bastante/Casi siempre
                                    </label>
                                </div>
                                <div class="form-check m-2">
                                    <input class="form-check-input" type="radio" name="1.1" id="1.1" value="3" checked>
                                    <label class="form-check-label respuesta" for="1.1">
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
                <input type="submit" name="submit" class="btn btn-primary text-center w-100" value="Siguiente 1/5 ➡️">
            </div>


            <!-- barra de progreso -->
            <hr class="m-4">
            <div class="me-5 ms-5">
                <span>Progreso del cuestionario:</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100">25%
                    </div>
                </div>
            </div>


        </form>


    </div>
</div>


<?php require_once "../nav/footer.php"; ?>
