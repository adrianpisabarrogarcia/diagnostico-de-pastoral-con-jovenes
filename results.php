<?php require_once "./nav/header.php"; ?>
<?php
//destroy session
session_destroy();


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
        <div class="mb-5 d-flex justify-content-center m-2">
            <img style="width: 100%" src="<?php echo BASEURL; ?>/assets/img/logo-herramienta-1.jpg">
        </div>
        <!-- title -->
        <h3 class="text-center">LOS RESULTADOS 🧮</h3>
        <div class="d-flex flex-column justify-content-center align-content-center align-items-center">
            <div class="text-center text-secondary text-readble">La herramienta que te presentamos te ofrece hacer un diagnóstico rápido (individual o en
                equipo) de tu pastoral con jóvenes. Para ello hemos repartido un total de 70 puntos entre los 7 bloques que
                se evalúan, de modo que cada uno de ellos valga 10 puntos. En cada bloque hay algunos “elementos esenciales”
                que, por su importancia, valen 3 puntos y el resto, como “elementos complementarios”, valen 1 punto. Esta
                ponderación viene determinada por nuestra manera de entender la pastoral con jóvenes, pero en un análisis
                posterior tú mismo puedes valorarla desde tus propias convicciones o acentos con los resultados que te
                ofrecemos.
            </div>
        </div>
        <hr>
        <div class="d-flex flex-column justify-content-center align-content-center align-items-center ali">
            <p class="text-center m-2 primary-color">
                Puedes compartir estos resultados con quien quieras, incluso guardarte el enlace para ti mismo:
            </p>
            <div class="col-12 col-md-4 m-2">
                <div class="text-center input-group">
                    <input id="actual-url" type="url" class="form-control" aria-label="url of the page" aria-describedby="url of the page" readonly>
                    <button class="btn btn-primary" type="button" id="copy-link">🔗 Copiar enlace</button>
                </div>

            </div>

            <div class="col-12 col-md-4 m-2">
                <button class="btn btn-primary w-100" type="button" onclick="imprimirPagina()">🖨 Imprimir resultados
                </button>
                <script>
                    function imprimirPagina() {
                        window.print();
                    }
                </script>
            </div>

        </div>

        <!-- copy link -->
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="copy-link-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto primary-color">📋 Copiar enlace</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Acabas de copiar el enlace al portapapeles.
                </div>
            </div>
        </div>


        <!-- the results -->
        <div class="m-2 p-2 mt-5 rounded primary-bg-color">
            <h3 class="text-center text-white text-decoration-underline">PERFIL GENERAL PROCESOS DE PASTORAL CON JÓVENES
                <h3>
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
                $totalPerfilGeneral = ( $perfilGeneral['equipoTrabajo'] + 
                    $perfilGeneral['proyectoEvangelizador'] + 
                    $perfilGeneral['procesoIntinerario'] + 
                    $perfilGeneral['procesoTransvesal'] + 
                    $perfilGeneral['metodologiaAcompanamiento'] + 
                    $perfilGeneral['metodologiaPersonalizacion'] + 
                    $perfilGeneral['comunicacionRedes'] ) / 7;
                $totalPerfilGeneral = number_format($totalPerfilGeneral, 2, ",", ".")
            ?>
            📈 Nota: <span class="fw-bold text-decoration-underline"><?= $totalPerfilGeneral ?></span>/10
        </div>        
        <div class="mt-5 mb-5">
            <canvas id="equipo-trabajo" width="900" height="500"></canvas>
            <script>
                const ctxEquipoTrabajo = document.getElementById('equipo-trabajo').getContext('2d');
                const chartEquipoTrabajo = new Chart(ctxEquipoTrabajo, {
                    type: 'radar',
                    data: {
                        labels: [
                            'Equipo de trabajo',
                            'Proyecto Evangelizador',
                            'Proceso/Itinerario',
                            'Procesos/Transversales',
                            'Metodología/Acompañamiento',
                            'Metodología/Personalización',
                            'Comunicación y redes'
                        ],
                        datasets: [{
                            label: 'Perfil general'.toUpperCase(),
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
                            stepSize: 1
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                    }
                });
            </script>
        </div>


        <section>
            <script>
                //Define colors for the charts
                const redPjColorOp = 'rgba(150, 201, 3, 0.2)'
                const redPjColor = 'rgba(150, 201, 3, 1)'
                const generalColorOp = 'rgba(147, 39, 143, 0.2)'
                const generalColor = 'rgba(147, 39, 143, 1)'
                const esecialesText = 'Esenciales'
                const complementariosText = 'Complementarios'
                const options = {
                    indexAxis: 'y',
                    legend: {
                        position: 'right',
                    },
                    scale: [{
                            min: 0,
                            max: 3,
                            stepSize: 0.5
                        },
                        {
                            min: 0,
                            max: 3,
                            stepSize: 0.5
                        }
                    ]
                }
            </script>

            <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                <h3 class="text-center text-white text-decoration-underline">EQUIPO DE TRABAJO<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $equipoTrabajo = $data["1.1"] + $data["1.4"] + $data["1.2"] + $data["1.3"] + $data["1.5"] + $data["1.6"];
                    $equipoTrabajo = number_format($equipoTrabajo, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $equipoTrabajo ?></span>/10
            </div>
            <div class="graph">
                <canvas id="equipo-de-trabajo" height=""></canvas>
                <script>
                    const ctxEquipoDeTrabajo = document.getElementById('equipo-de-trabajo').getContext('2d');
                    const chartEquipoDeTrabajo = new Chart(ctxEquipoDeTrabajo, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Equipo Pastoral con Jóvenes',
                                'Reponsable',
                                'Formación',
                                'Establidad',
                                'Recursos',
                                'Comunicación'
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
                <h3 class="text-center text-white text-decoration-underline">PROYECTO EVANGELIZADOR<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $proyectoEvangelizador = $data["2.1"] + $data["2.2"] + $data["2.3"] + $data["2.4"] + $data["2.5"] + $data["2.6"] + $data["2.7"] + $data["2.8"];
                    $proyectoEvangelizador = number_format($proyectoEvangelizador, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $proyectoEvangelizador ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proyecto-evangelizador"></canvas>
                <script>
                    const ctxProyectoEvangelizador = document.getElementById('proyecto-evangelizador').getContext('2d');
                    const charProyectoEvangelizador = new Chart(ctxProyectoEvangelizador, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Proyecto',
                                'Programación anual',
                                'Evaluación periódica',
                                'Plan de mejora',
                                'Presupuesto',
                                'Principios',
                                'Proceso de selección',
                                'Estructura pastoral'
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
                <h3 class="text-center text-white text-decoration-underline">PROCESO - ITINERARIO<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $procesoIntinerario = $data["3.1.1"] + $data["3.1.3"] + $data["3.1.4"] + $data["3.1.2"];
                    $procesoIntinerario = number_format($procesoIntinerario, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $procesoIntinerario ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-itinerario" height=""></canvas>
                <script>
                    const ctxProcesoItinerario = document.getElementById('proceso-itinerario').getContext('2d');
                    const charProcesoItinerario = new Chart(ctxProcesoItinerario, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Itinerario Pastoral con Jóvenes',
                                'Comunidad cristiana',
                                'Discernimiento vocacional'
                            ],
                            datasets: [{
                                    label: esecialesText,
                                    data: [
                                        <?= $data["3.1.1"] ?>,
                                        <?= $data["3.1.3"] ?>,
                                        <?= $data["3.1.4"] ?>,
                                        
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
                <h3 class="text-center text-white text-decoration-underline">PROCESO - TRANSVERSALES<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $procesoTransversales = $data["3.2.1"] + $data["3.2.6"] + $data["3.2.2"] + $data["3.2.3"] + $data["3.2.4"] + $data["3.2.5"];
                    $procesoTransversales = number_format($procesoTransversales, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $procesoTransversales ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-transversales" height=""></canvas>
                <script>
                    const ctxProcesoTransversales = document.getElementById('proceso-transversales').getContext('2d');
                    const charProcesoTransversales = new Chart(ctxProcesoTransversales, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Oferta grupos de fe',
                                'Formación de líderes',
                                'Voluntario/Servicio',
                                'Tiempo libre',
                                'Celebraciones litúrgicas',
                                'Oración'
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
                <h3 class="text-center text-white text-decoration-underline">METODOLOGÍA - ACOMPAÑAMIENTO<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $metodologiaAcompanamiento = $data["4.1.1"] + $data["4.1.3"] + $data["4.1.4"] + $data["4.1.2"];
                    $metodologiaAcompanamiento = number_format($metodologiaAcompanamiento, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $metodologiaAcompanamiento ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-acompanamiento" height=""></canvas>
                <script>
                    const ctxMetodologiaAcompañamiento = document.getElementById('proceso-acompanamiento').getContext('2d');
                    const charMetodologiaAcompanamiento = new Chart(ctxMetodologiaAcompañamiento, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Acompañamiento personal',
                                'Encuentros con comunidades cristianas',
                                'Proceso de pastoral coherente',
                                'Formación en acompañamiento'
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
                <h3 class="text-center text-white text-decoration-underline">METODOLOGÍA - PERSONALIZACIÓN<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $metodologiaPersonalizacion = $data["4.2.1"] + $data["4.2.3"] + $data["4.2.4"] + $data["4.2.2"];
                    $metodologiaPersonalizacion = number_format($metodologiaPersonalizacion, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $metodologiaPersonalizacion ?></span>/10
            </div>
            <div class="graph">
                <canvas id="proceso-personalizacion" height=""></canvas>
                <script>
                    const ctxProcesoPersonalizacion = document.getElementById('proceso-personalizacion').getContext('2d');
                    const charProcesoPersonalizacion = new Chart(ctxProcesoPersonalizacion, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Pedagogía experiencial',
                                'Experiencias fuertes',
                                'Momentos de discernimiento',
                                'Jóvenes líderes'
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
                <h3 class="text-center text-white text-decoration-underline">COMUNICACIÓN Y REDES<h3>
            </div>
            <div class="p-2 text-center">
                <?php
                    $comunicacionRedes = $data["5.1"] + $data["5.3"] + $data["5.2"] + $data["5.4"] + $data["5.5"] + $data["5.6"];
                    $comunicacionRedes = number_format($comunicacionRedes, 2, ",", ".")
                ?>
                📈 Nota: <span class="fw-bold text-decoration-underline"><?= $comunicacionRedes ?></span>/10
            </div>
            <div class="graph">
                <canvas id="comunicacion-redes" height=""></canvas>
                <script>
                    const ctxComunicacionRedes = document.getElementById('comunicacion-redes').getContext('2d');
                    const charComunicacionRedes = new Chart(ctxComunicacionRedes, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Estrategias de comunicación',
                                'Encuentros interinstitucionales',
                                'Redes sociales',
                                'Trabajo en red eclesial',
                                'Integración a las familias',
                                'Análisis de la realidad local'
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
                <a href="https://rpj.es" target="_blank" class="btn btn-primary text-center w-100">🏠 Ir a rpj.es</a>
            </div>
            <div class="m-2 text-center">
                <a href="<?= BASEURL ?>/" class="btn btn-primary text-center w-100">📝 Volver a realizar el
                    formulario</a>
            </div>
        </div>
    </div>


</div>

<a id="downloadPdf">Imprimir</a>

</div>


<?php require_once "./nav/footer.php"; ?>


<script>
    //current url
    var url = window.location.href;
    //put the url in the input
    document.querySelector("#actual-url").value = url;
    //copy the url to the clipboard when the button is clicked
    document.querySelector("#copy-link").addEventListener("click", function() {
        document.querySelector("#actual-url").select();
        document.execCommand("copy");
    });


    //tast to show
    var toastTrigger = document.getElementById('copy-link')
    var toastLiveExample = document.getElementById('copy-link-toast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', function() {
            var toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
    }
</script>