<?php global $i18n, $lang;
require_once "./nav/header.php"; ?>
<?php
//destroy session
$lang = 'es';
if(isset($_SESSION['language'])){
    $lang = $_SESSION['language'];
}
session_destroy();
session_start();
$_SESSION['language'] = $lang;


if (!isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        echo "<script> location.replace('" . BASEURL . "/'); </script>";
        exit();
    }
}

// get results from database
$token = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = '$token'";

$conn = conectarBD();
$esUnico = true;
$stmt = $conn->prepare($sql);
$stmt->execute();
desconectarBD($conn);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$data = [];
if (count($rows) > 0) {
    foreach ($rows as $row) {
        $data = [
            "token" => $row['ID'],
            "nombre" => $row['NOMBRE'],
            "email" => $row['EMAIL'],
            "movimiento" => $row['MOVIMIENTO'],
            "1.1" => floatval($row['1.1']),
            "1.2" => floatval($row['1.2']),
            "1.3" => floatval($row['1.3']),
            "1.4" => floatval($row['1.4']),
            "1.5" => floatval($row['1.5']),
            "1.6" => floatval($row['1.6']),
            "2.1" => floatval($row['2.1']),
            "2.2" => floatval($row['2.2']),
            "2.3" => floatval($row['2.3']),
            "2.4" => floatval($row['2.4']),
            "2.5" => floatval($row['2.5']),
            "2.6" => floatval($row['2.6']),
            "2.7" => floatval($row['2.7']),
            "2.8" => floatval($row['2.8']),
            "3.1.1" => floatval($row['3.1.1']),
            "3.1.2" => floatval($row['3.1.2']),
            "3.1.3" => floatval($row['3.1.3']),
            "3.1.4" => floatval($row['3.1.4']),
            "3.2.1" => floatval($row['3.2.1']),
            "3.2.2" => floatval($row['3.2.2']),
            "3.2.3" => floatval($row['3.2.3']),
            "3.2.4" => floatval($row['3.2.4']),
            "3.2.5" => floatval($row['3.2.5']),
            "3.2.6" => floatval($row['3.2.6']),
            "4.1.1" => floatval($row['4.1.1']),
            "4.1.2" => floatval($row['4.1.2']),
            "4.1.3" => floatval($row['4.1.3']),
            "4.1.4" => floatval($row['4.1.4']),
            "4.2.1" => floatval($row['4.2.1']),
            "4.2.2" => floatval($row['4.2.2']),
            "4.2.3" => floatval($row['4.2.3']),
            "4.2.4" => floatval($row['4.2.4']),
            "5.1" => floatval($row['5.1']),
            "5.2" => floatval($row['5.2']),
            "5.3" => floatval($row['5.3']),
            "5.4" => floatval($row['5.4']),
            "5.5" => floatval($row['5.5']),
            "5.6" => floatval($row['5.6'])
        ];
    }
} else {
    echo "<script> location.replace('" . BASEURL . "/'); </script>";
    exit();
}

?>

<div class="row justify-content-center align-items-center">

    <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">
        <div class="mb-5 p-3 d-flex justify-content-around align-items-center m-2 rounded secondary-bg-color">
            <img class="d-none d-md-block" style="height: 200px" src="<?php echo BASEURL; ?>/assets/img/logo-oficial.png">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-center text-white"><?= $i18n[$lang]['herramienta'] ?></h1>
                <h2 class="text-center text-white"><?= $i18n[$lang]['diagnosticoPastoral'] ?></h2>
                <h1 class="text-center text-white"><?= $i18n[$lang]['conJovenes'] ?></h1>
            </div>
        </div>
        <!-- title -->
        <h3 class="text-center"><?= $i18n[$lang]['losResultados'] ?></h3>
        <div class="d-flex flex-column justify-content-center align-content-center align-items-center">
            <div class="text-center text-secondary text-readble">
                <?= $i18n[$lang]['descripcionResultados'] ?>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-column justify-content-center align-content-center align-items-center ali">
            <p class="text-center m-2 primary-color">
                <?= $i18n[$lang]['compartirResultados'] ?>
            </p>
            <div class="col-12 col-md-4 m-2">
                <div class="text-center input-group">
                    <input id="actual-url" type="url" class="form-control" aria-label="url of the page"
                           aria-describedby="url of the page" readonly>
                    <button class="btn btn-primary" type="button" id="copy-link">🔗 <?= $i18n[$lang]['copiarEnlace'] ?></button>
                </div>

            </div>

            <div class="col-12 col-md-4 m-2">
                <button class="btn btn-primary w-100" type="button" onclick="window.print()">🖨 <?= $i18n[$lang]['imprimirResultados'] ?>
                </button>
            </div>

        </div>

        <!-- copy link -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="copy-link-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto primary-color">📋 <?= $i18n[$lang]['copiarEnlace'] ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?= $i18n[$lang]['hasCopiado'] ?>
                </div>
            </div>
        </div>

        <!-- the results -->
        <section id="results">
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline">
                    <?= $i18n[$lang]['tituloPrimerBloque'] ?>
                </h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $perfilGeneral = [
                    'equipoTrabajo' => $data["1.1"] + $data["1.2"] + $data["1.3"] + $data["1.4"] + $data["1.5"] + $data["1.6"],
                    'proyectoEvangelizador' => $data["2.1"] + $data["2.2"] + $data["2.3"] + $data["2.4"] + $data["2.5"] + $data["2.6"] + $data["2.7"] + $data["2.8"],
                    'procesoIntinerario' => $data["3.1.1"] + $data["3.1.2"] + $data["3.1.3"] + $data["3.1.4"],
                    'procesoTransvesal' => $data["3.2.1"] + $data["3.2.2"] + $data["3.2.3"] + $data["3.2.4"] + $data["3.2.5"] + $data["3.2.6"],
                    'metodologiaAcompanamiento' => $data["4.1.1"] + $data["4.1.2"] + $data["4.1.3"] + $data["4.1.4"],
                    'metodologiaPersonalizacion' => $data["4.2.1"] + $data["4.2.2"] + $data["4.2.3"] + $data["4.2.4"],
                    'comunicacionRedes' => $data["5.1"] + $data["5.2"] + $data["5.3"] + $data["5.4"] + $data["5.5"] + $data["5.6"]
                ];
                $totalPerfilGeneral = ($perfilGeneral['equipoTrabajo'] +
                        $perfilGeneral['proyectoEvangelizador'] +
                        $perfilGeneral['procesoIntinerario'] +
                        $perfilGeneral['procesoTransvesal'] +
                        $perfilGeneral['metodologiaAcompanamiento'] +
                        $perfilGeneral['metodologiaPersonalizacion'] +
                        $perfilGeneral['comunicacionRedes']) / 7;
                $totalPerfilGeneral = number_format($totalPerfilGeneral, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $totalPerfilGeneral ?></span>/10
            </div>
            <div class="mt-5 mb-5">
                <canvas id="equipo-trabajo" width="900" height="700"></canvas>
                <script>
                    const ctxEquipoTrabajo = document.getElementById('equipo-trabajo').getContext('2d');
                    const chartEquipoTrabajo = new Chart(ctxEquipoTrabajo, {
                        type: 'radar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['equipoTrabajo'] ?>',
                                '<?= $i18n[$lang]['proyectoEvangelizador'] ?>',
                                '<?= $i18n[$lang]['procesoItinerario'] ?>',
                                '<?= $i18n[$lang]['procesosTransversales'] ?>',
                                '<?= $i18n[$lang]['metodologiaAcompanamiento'] ?>',
                                '<?= $i18n[$lang]['metodologiaPersonalizacion'] ?>',
                                '<?= $i18n[$lang]['comunicacionRedes'] ?>'
                            ],
                            datasets: [{
                                label: '<?= $i18n[$lang]['perfilGeneral'] ?>',
                                data: [
                                    <?= $perfilGeneral['equipoTrabajo'] ?>,
                                    <?= $perfilGeneral['proyectoEvangelizador'] ?>,
                                    <?= $perfilGeneral['procesoIntinerario'] ?>,
                                    <?= $perfilGeneral['procesoTransvesal'] ?>,
                                    <?= $perfilGeneral['metodologiaAcompanamiento'] ?>,
                                    <?= $perfilGeneral['metodologiaPersonalizacion'] ?>,
                                    <?= $perfilGeneral['comunicacionRedes'] ?>
                                ],
                                backgroundColor: 'rgba(70, 249, 249, 0.2)',
                                borderColor: 'rgba(70, 249, 249, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scale: {
                                min: 0,
                                max: 10,
                                stepSize: 1,
                                ticks: {
                                    font: {
                                        size: 15
                                    }
                                }
                            },
                            scales: {
                                r: {
                                    pointLabels: {
                                        font: {
                                            size: 15
                                        }
                                    }
                                }
                            },
                            responsive: true,
                            maintainAspectRatio: false
                        }
                    });
                </script>
            </div>

            <script>
                //Define colors for the charts
                const redPjColorOp = 'rgba(150, 201, 3, 0.2)'
                const redPjColor = 'rgba(150, 201, 3, 1)'
                const generalColorOp = 'rgba(147, 39, 143, 0.2)'
                const generalColor = 'rgba(147, 39, 143, 1)'
                const esecialesText = '<?= $i18n[$lang]['esenciales'] ?>'
                const complementariosText = '<?= $i18n[$lang]['complementarios'] ?>'
                const options = {
                    indexAxis: 'y',
                    legend: {
                        position: 'right',
                    },
                    scales: {
                        x: {
                            min: 0,
                            max: 3,
                            stepSize: 0.5
                        }
                    }


                }
            </script>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloSegundoBloque'] ?></h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $equipoTrabajo = $data["1.1"] + $data["1.4"] + $data["1.2"] + $data["1.3"] + $data["1.5"] + $data["1.6"];
                $equipoTrabajo = number_format($equipoTrabajo, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $equipoTrabajo ?></span>/10
            </div>
            <div class="graph">
                <canvas id="equipo-de-trabajo" height=""></canvas>
                <script>
                    const ctxEquipoDeTrabajo = document.getElementById('equipo-de-trabajo').getContext('2d');
                    const chartEquipoDeTrabajo = new Chart(ctxEquipoDeTrabajo, {
                        type: 'bar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['equipoPastoralConJovenes'] ?>',
                                '<?= $i18n[$lang]['responsable'] ?>',
                                '<?= $i18n[$lang]['formacion'] ?>',
                                '<?= $i18n[$lang]['estabilidad'] ?>',
                                '<?= $i18n[$lang]['recursos'] ?>',
                                '<?= $i18n[$lang]['comunicacion'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["1.1"] ?>,
                                    <?= $data["1.4"] ?>,
                                    0,
                                    0,
                                    0,
                                    0
                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        0,
                                        <?= $data["1.2"] ?>,
                                        <?= $data["1.3"] ?>,
                                        <?= $data["1.5"] ?>,
                                        <?= $data["1.6"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloTercerBloque'] ?></h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $proyectoEvangelizador = $data["2.1"] + $data["2.2"] + $data["2.3"] + $data["2.4"] + $data["2.5"] + $data["2.6"] + $data["2.7"] + $data["2.8"];
                $proyectoEvangelizador = number_format($proyectoEvangelizador, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $proyectoEvangelizador ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proyecto-evangelizador"></canvas>
                <script>
                    const ctxProyectoEvangelizador = document.getElementById('proyecto-evangelizador').getContext('2d');
                    const charProyectoEvangelizador = new Chart(ctxProyectoEvangelizador, {
                        type: 'bar',
                        data: {
                            'labels': [
                                '<?= $i18n[$lang]['proyecto'] ?>',
                                '<?= $i18n[$lang]['programacionAnual'] ?>',
                                '<?= $i18n[$lang]['evaluacionPeriodica'] ?>',
                                '<?= $i18n[$lang]['planMejora'] ?>',
                                '<?= $i18n[$lang]['presupuesto'] ?>',
                                '<?= $i18n[$lang]['principios'] ?>',
                                '<?= $i18n[$lang]['perfilAnimadores'] ?>',
                                '<?= $i18n[$lang]['estructuraPastoral'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["2.1"] ?>,
                                    0,
                                    0,
                                    0,
                                    0,
                                    0,
                                    0,
                                    0
                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        <?= $data["2.2"] ?>,
                                        <?= $data["2.3"] ?>,
                                        <?= $data["2.4"] ?>,
                                        <?= $data["2.5"] ?>,
                                        <?= $data["2.6"] ?>,
                                        <?= $data["2.7"] ?>,
                                        <?= $data["2.8"] ?>,
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloCuartoBloque'] ?></h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $procesoIntinerario = $data["3.1.1"] + $data["3.1.3"] + $data["3.1.4"] + $data["3.1.2"];
                $procesoIntinerario = number_format($procesoIntinerario, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $procesoIntinerario ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-itinerario" height=""></canvas>
                <script>
                    const ctxProcesoItinerario = document.getElementById('proceso-itinerario').getContext('2d');
                    const charProcesoItinerario = new Chart(ctxProcesoItinerario, {
                        type: 'bar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['itinerarioPastoralConJovenes'] ?>',
                                '<?= $i18n[$lang]['comunidadCristiana'] ?>',
                                '<?= $i18n[$lang]['discernimientoVocacional'] ?>',
                                '<?= $i18n[$lang]['vocacion'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["3.1.1"] ?>,
                                    <?= $data["3.1.3"] ?>,
                                    <?= $data["3.1.4"] ?>,
                                    0

                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        0,
                                        0,
                                        <?= $data["3.1.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloQuintoBloque'] ?></h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $procesoTransversales = $data["3.2.1"] + $data["3.2.6"] + $data["3.2.2"] + $data["3.2.3"] + $data["3.2.4"] + $data["3.2.5"];
                $procesoTransversales = number_format($procesoTransversales, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $procesoTransversales ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-transversales" height=""></canvas>
                <script>
                    const ctxProcesoTransversales = document.getElementById('proceso-transversales').getContext('2d');
                    const charProcesoTransversales = new Chart(ctxProcesoTransversales, {
                        type: 'bar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['ofertaGruposDeFe'] ?>',
                                '<?= $i18n[$lang]['formacionLideres'] ?>',
                                '<?= $i18n[$lang]['voluntarioServicio'] ?>',
                                '<?= $i18n[$lang]['tiempoLibre'] ?>',
                                '<?= $i18n[$lang]['celebracionesLiturgicas'] ?>',
                                '<?= $i18n[$lang]['oracion'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["3.2.1"] ?>,
                                    <?= $data["3.2.6"] ?>,
                                    0,
                                    0,
                                    0,
                                    0

                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        0,
                                        <?= $data["3.2.2"] ?>,
                                        <?= $data["3.2.3"] ?>,
                                        <?= $data["3.2.4"] ?>,
                                        <?= $data["3.2.5"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloSextoBloque'] ?></h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $metodologiaAcompanamiento = $data["4.1.1"] + $data["4.1.3"] + $data["4.1.4"] + $data["4.1.2"];
                $metodologiaAcompanamiento = number_format($metodologiaAcompanamiento, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $metodologiaAcompanamiento ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-acompanamiento" height=""></canvas>
                <script>
                    const ctxMetodologiaAcompañamiento = document.getElementById('proceso-acompanamiento').getContext('2d');
                    const charMetodologiaAcompanamiento = new Chart(ctxMetodologiaAcompañamiento, {
                        type: 'bar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['acompanamientoPersonal'] ?>',
                                '<?= $i18n[$lang]['encuentrosConComunidadesCristianas'] ?>',
                                '<?= $i18n[$lang]['procesoPastoralCoherente'] ?>',
                                '<?= $i18n[$lang]['formacionEnAcompanamiento'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["4.1.1"] ?>,
                                    <?= $data["4.1.3"] ?>,
                                    <?= $data["4.1.4"] ?>,
                                    0

                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        0,
                                        0,
                                        <?= $data["4.1.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloSeptimoBloque'] ?><h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $metodologiaPersonalizacion = $data["4.2.1"] + $data["4.2.3"] + $data["4.2.4"] + $data["4.2.2"];
                $metodologiaPersonalizacion = number_format($metodologiaPersonalizacion, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $metodologiaPersonalizacion ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-personalizacion" height=""></canvas>
                <script>
                    const ctxProcesoPersonalizacion = document.getElementById('proceso-personalizacion').getContext('2d');
                    const charProcesoPersonalizacion = new Chart(ctxProcesoPersonalizacion, {
                        type: 'bar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['pedagogiaExperiencial'] ?>',
                                '<?= $i18n[$lang]['experienciasFuertes'] ?>',
                                '<?= $i18n[$lang]['momentosDeDiscernimiento'] ?>',
                                '<?= $i18n[$lang]['jovenesLideres'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["4.2.1"] ?>,
                                    <?= $data["4.2.3"] ?>,
                                    <?= $data["4.2.4"] ?>,
                                    0

                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        0,
                                        0,
                                        <?= $data["4.2.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline"><?= $i18n[$lang]['tituloOctavoBloque'] ?></h3>
            </div>
            <div class="p-2 text-center">
                <?php
                $comunicacionRedes = $data["5.1"] + $data["5.3"] + $data["5.2"] + $data["5.4"] + $data["5.5"] + $data["5.6"];
                $comunicacionRedes = number_format($comunicacionRedes, 2, ",", ".")
                ?>
                📈 <?= $i18n[$lang]['nota'] ?> <span class="fw-bold text-decoration-underline"><?= $comunicacionRedes ?></span>/10
            </div>
            <div class="graph">
                <canvas id="comunicacion-redes" height=""></canvas>
                <script>
                    const ctxComunicacionRedes = document.getElementById('comunicacion-redes').getContext('2d');
                    const charComunicacionRedes = new Chart(ctxComunicacionRedes, {
                        type: 'bar',
                        data: {
                            labels: [
                                '<?= $i18n[$lang]['estrategiasDeComunicacion'] ?>',
                                '<?= $i18n[$lang]['encuentrosInterinstitucionales'] ?>',
                                '<?= $i18n[$lang]['redesSociales'] ?>',
                                '<?= $i18n[$lang]['trabajoEnRedEclesial'] ?>',
                                '<?= $i18n[$lang]['integracionALasFamilias'] ?>',
                                '<?= $i18n[$lang]['analisisDeLaRealidadLocal'] ?>'
                            ],
                            datasets: [{
                                label: esecialesText,
                                data: [
                                    <?= $data["5.1"] ?>,
                                    <?= $data["5.3"] ?>,
                                    0,
                                    0,
                                    0,
                                    0
                                ],
                                backgroundColor: redPjColorOp,
                                borderColor: redPjColor,
                                borderWidth: 1
                            },
                                {
                                    label: complementariosText,
                                    data: [
                                        0,
                                        0,
                                        <?= $data["5.2"] ?>,
                                        <?= $data["5.4"] ?>,
                                        <?= $data["5.5"] ?>,
                                        <?= $data["5.6"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: options
                    });
                </script>
            </div>
        </section>
        <hr class="m-5">
        <div class="d-md-flex justify-content-center w-100">
            <div class="m-2 text-center">
                <a href="https://rpj.es" target="_blank" class="btn btn-primary text-center w-100">🏠 <?= $i18n[$lang]['iraRPJ'] ?></a>
            </div>
            <div class="m-2 text-center">
                <a href="<?= BASEURL ?>/" class="btn btn-primary text-center w-100">📝 <?= $i18n[$lang]['volverARealizarElFormulario'] ?></a>
            </div>
        </div>
    </div>


</div>

<a id="downloadPdf"><?= $i18n[$lang]['imprimirResultados'] ?></a>

</div>


<?php require_once "./nav/footer.php"; ?>


<script>
    //current url
    var url = window.location.href;
    //put the url in the input
    document.querySelector("#actual-url").value = url;
    //copy the url to the clipboard when the button is clicked
    document.querySelector("#copy-link").addEventListener("click", function () {
        document.querySelector("#actual-url").select();
        document.execCommand("copy");
    });


    //tast to show
    var toastTrigger = document.getElementById('copy-link')
    var toastLiveExample = document.getElementById('copy-link-toast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', function () {
            var toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }
</script>