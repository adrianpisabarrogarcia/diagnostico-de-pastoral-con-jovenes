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
        <h3 class="text-center ">LOS RESULTADOS 🧮</h3>
        <p class="text-center">Evaluar es algo importante, felicitaciones por las áreas en las que has cumplido las
            expectativas 🥳 y recuerda mejorar las que son más débiles 👨‍🔧.</p>

        <div class="d-flex flex-column justify-content-center align-content-center align-items-center ali">
            <p class="text-center m-2 primary-color">
                Puedes compartir estos resultados con quien quieras, incluso guardarte el enlace para ti mismo:
            </p>
            <div class="col-12 col-md-4 ">
                <div class="text-center input-group">
                    <input id="actual-url" type="url" class="form-control" aria-label="url of the page" aria-describedby="url of the page" readonly>
                    <button class="btn btn-primary" type="button" id="copy-link">🔗 Copiar enlace</button>
                </div>
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
            <h3 class="text-center text-white text-decoration-underline">PERFIL GENERAL PROCESOS DE PASTORAL CON JÓVENES<h3>
        </div>
        <div class="mt-5 mb-5">
            <canvas id="equipo-trabajo" width="900" height="500"></canvas>
            <script>
                const ctxEquipoTrabajo = document.getElementById('equipo-trabajo').getContext('2d');
                const chartEquipoTrabajo = new Chart(ctxEquipoTrabajo, {
                    type: 'radar',
                    data: {
                        labels: ['Equipo de trabajo', 'Proyecto Evangelizador', 'Proceso/Itinerario', 'Procesos/Transversales', 'Metodología/Acompañamiento', 'Metodología/Personalización', 'Comunicación y redes'],
                        datasets: [{
                            label: 'Perfil general'.toUpperCase(),
                            data: [
                                <?= $data["1.1"] ?> + <?= $data["1.2"] ?> + <?= $data["1.3"] ?> + <?= $data["1.4"] ?> + <?= $data["1.5"] ?> + <?= $data["1.6"] ?>,
                                <?= $data["2.1"] ?> + <?= $data["2.2"] ?> + <?= $data["2.3"] ?> + <?= $data["2.4"] ?> + <?= $data["2.5"] ?> + <?= $data["2.6"] ?> + <?= $data["2.7"] ?> + <?= $data["2.8"] ?>,
                                <?= $data["3.1.1"] ?> + <?= $data["3.1.2"] ?> + <?= $data["3.1.3"] ?> + <?= $data["3.1.4"] ?>,
                                <?= $data["3.2.1"] ?> + <?= $data["3.2.2"] ?> + <?= $data["3.2.3"] ?> + <?= $data["3.2.4"] ?> + <?= $data["3.2.5"] ?> + <?= $data["3.2.6"] ?>,
                                <?= $data["4.1.1"] ?> + <?= $data["4.1.2"] ?> + <?= $data["4.1.3"] ?> + <?= $data["4.1.4"] ?>,
                                <?= $data["4.2.1"] ?> + <?= $data["4.2.2"] ?> + <?= $data["4.2.3"] ?> + <?= $data["4.2.4"] ?>,
                                <?= $data["5.1"] ?> + <?= $data["5.2"] ?> + <?= $data["5.3"] ?> + <?= $data["5.4"] ?> + <?= $data["5.5"] ?> + <?= $data["5.6"] ?>
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
                    const redPjColorOp = 'rgba(150, 201, 3, 0.2)';
                    const redPjColor = 'rgba(150, 201, 3, 1)';
                    const generalColorOp = 'rgba(147, 39, 143, 0.2)';
                    const generalColor = 'rgba(147, 39, 143, 1)';
                </script>

                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">EQUIPO DE TRABAJO<h3>
                </div>
                <div class="graph">
                    <canvas id="equipo-de-trabajo-uno" height="100"></canvas>
                    <script>
                        const ctxEquipoDeTrabajoUno = document.getElementById('equipo-de-trabajo-uno').getContext('2d');
                        const chartEquipoDeTrabajoUno = new Chart(ctxEquipoDeTrabajoUno, {
                            type: 'bar',
                            data: {
                                labels: ['Responsable', 'Equipo Pastoral con Jóvenes'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["1.4"] ?>,
                                        <?= $data["1.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-equipo-de-trabajo"></canvas>
                    <script>
                        const ctxComplementariosEquipoDeTrabajo = document.getElementById('complementario-equipo-de-trabajo').getContext('2d');
                        const chartComplementariosEquipoDeTrabajo = new Chart(ctxComplementariosEquipoDeTrabajo, {
                            type: 'bar',
                            data: {
                                labels: ['Comunicación', 'Recursos', 'Estabilidad', 'Formación'],
                                datasets: [{
                                    label: 'Elementos complementarios por área',
                                    data: [
                                        <?= $data["1.6"] ?>,
                                        <?= $data["1.5"] ?>,
                                        <?= $data["1.3"] ?>,
                                        <?= $data["1.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">PROYECTO EVANGELIZADOR<h3>
                </div>
                <div class="graph">
                    <canvas id="proyecto-evangelizador" height="100"></canvas>
                    <script>
                        const ctxProyectoEvangelizador = document.getElementById('proyecto-evangelizador').getContext('2d');
                        const chartProyectoEvangelizador = new Chart(ctxProyectoEvangelizador, {
                            type: 'bar',
                            data: {
                                labels: ['Proyecto'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["2.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-proyecto-evangelizador"></canvas>
                    <script>
                        const ctxComplementariosProyectoEvangelizador = document.getElementById('complementario-proyecto-evangelizador').getContext('2d');
                        const chartComplementariosProyectoEvangelizador = new Chart(ctxComplementariosProyectoEvangelizador, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Estructura pastoral',
                                    'Proceso de selección',
                                    'Principios',
                                    'Presupuesto',
                                    'Plan de mejora',
                                    'Evaluación periódica',
                                    'Programación anual'
                                ],
                                datasets: [{
                                    label: 'Elementos complementarios por área',
                                    data: [
                                        <?= $data["2.8"] ?>,
                                        <?= $data["2.7"] ?>,
                                        <?= $data["2.6"] ?>,
                                        <?= $data["2.5"] ?>,
                                        <?= $data["2.4"] ?>,
                                        <?= $data["2.3"] ?>,
                                        <?= $data["2.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">PROCESO - ITINERARIO<h3>
                </div>
                <div class="graph">
                    <canvas id="proceso-intinerario" height="100"></canvas>
                    <script>
                        const ctxProcesoIntinerario = document.getElementById('proceso-intinerario').getContext('2d');
                        const chartProcesoIntinerario = new Chart(ctxProcesoIntinerario, {
                            type: 'bar',
                            data: {
                                labels: ['Discenimiento vocacional', 'Comunidad Cristiana', 'Itinerario Pastoral con Jóvenes'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["3.1.4"] ?>,
                                        <?= $data["3.1.3"] ?>,
                                        <?= $data["3.1.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scales: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-proceso-intinerario"></canvas>
                    <script>
                        const ctxComplementariosProcesoIntinerario = document.getElementById('complementario-proceso-intinerario').getContext('2d');
                        const chartComplementariosProcesoIntinerario = new Chart(ctxComplementariosProcesoIntinerario, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Discernimiento vocacional'
                                ],
                                datasets: [{
                                    label: 'Elementos complementarios por área',
                                    data: [
                                        <?= $data["3.1.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 3
                                }
                            }
                        });
                    </script>
                </div>
                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">PROCESO - TRANSVERSALES<h3>
                </div>
                <div class="graph">
                    <canvas id="proceso-transversales" height="100"></canvas>
                    <script>
                        const ctxProcesoTransversales = document.getElementById('proceso-transversales').getContext('2d');
                        const chartProcesoTransversales = new Chart(ctxProcesoTransversales, {
                            type: 'bar',
                            data: {
                                labels: ['Formación de líderes', 'Oferta grupos de fe'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["3.2.6"] ?>,
                                        <?= $data["3.2.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-proceso-transversales"></canvas>
                    <script>
                        const ctxComplementariosProcesoTransversales = document.getElementById('complementario-proceso-transversales').getContext('2d');
                        const chartComplementariosProcesoTransversales = new Chart(ctxComplementariosProcesoTransversales, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Oración',
                                    'Celebraciones litúrgicas',
                                    'Tiempo libre',
                                    'Voluntariado/servicio'
                                ],
                                datasets: [{
                                    label: 'Elementos complementarios por área',
                                    data: [
                                        <?= $data["3.2.5"] ?>,
                                        <?= $data["3.2.4"] ?>,
                                        <?= $data["3.2.3"] ?>,
                                        <?= $data["3.2.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">METODOLOGÍA - ACOMPAÑAMIENTO<h3>
                </div>
                <div class="graph">
                    <canvas id="metodologia-acompanamiento" height="100"></canvas>
                    <script>
                        const ctxMetodologiaAcompanamiento = document.getElementById('metodologia-acompanamiento').getContext('2d');
                        const chartMetodologiaAcompanamiento = new Chart(ctxMetodologiaAcompanamiento, {
                            type: 'bar',
                            data: {
                                labels: ['Proceso de pastoral coherente', 'Encuentros con comunidades cristianas', 'Acompañamiento personal'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["4.1.4"] ?>,
                                        <?= $data["4.1.3"] ?>,
                                        <?= $data["4.1.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-metodologia-acompanamiento"></canvas>
                    <script>
                        const ctxComplementariosMetodologiaAcompanamiento = document.getElementById('complementario-metodologia-acompanamiento').getContext('2d');
                        const chartComplementariosMetodologiaAcompanamiento = new Chart(ctxComplementariosMetodologiaAcompanamiento, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Elementos complementarios por área'
                                ],
                                datasets: [{
                                    label: 'Sobre 3 puntos',
                                    data: [
                                        <?= $data["4.1.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">METODOLOGÍA - PERSONALIZACIÓN<h3>
                </div>
                <div class="graph">
                    <canvas id="metodologia-personalizacion" height="100"></canvas>
                    <script>
                        const ctxMetodologiaPersonalizacion = document.getElementById('metodologia-personalizacion').getContext('2d');
                        const chartMetodologiapersonalizacion = new Chart(ctxMetodologiaPersonalizacion, {
                            type: 'bar',
                            data: {
                                labels: ['Momentos de discernimiento', 'Experiencias fuertes', 'Pedagogía experimental'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["4.2.4"] ?>,
                                        <?= $data["4.2.3"] ?>,
                                        <?= $data["4.2.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-metodologia-personalizacion"></canvas>
                    <script>
                        const ctxComplementariosMetodologiaPersonalizacion = document.getElementById('complementario-metodologia-personalizacion').getContext('2d');
                        const chartComplementariosMetodologiaPersonalziacion = new Chart(ctxComplementariosMetodologiaPersonalizacion, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Jóvenes líderes'
                                ],
                                datasets: [{
                                    label: 'Elementos complementarios por área',
                                    data: [
                                        <?= $data["4.2.3"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="m-2 p-2 mt-5 rounded primary-bg-color">
                    <h3 class="text-center text-white text-decoration-underline">COMUNICACIÓN Y REDES<h3>
                </div>
                <div class="graph">
                    <canvas id="comunicacion-redes" height="100"></canvas>
                    <script>
                        const ctxComunicacionRedes = document.getElementById('comunicacion-redes').getContext('2d');
                        const chartComunicacionRedes = new Chart(ctxComunicacionRedes, {
                            type: 'bar',
                            data: {
                                labels: ['Encuentros interinstitucionales', 'Estrategia de comunicación'],
                                datasets: [{
                                    label: 'Elementos esenciales por área',
                                    data: [
                                        <?= $data["5.3"] ?>,
                                        <?= $data["5.1"] ?>
                                    ],
                                    backgroundColor: redPjColorOp,
                                    borderColor: redPjColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 3,
                                    stepSize: 0.5
                                }
                            }
                        });
                    </script>
                </div>
                <div class="graph-small">
                    <canvas id="complementario-comunicacion-redes"></canvas>
                    <script>
                        const ctxComplementariosComunicacionRedes = document.getElementById('complementario-comunicacion-redes').getContext('2d');
                        const chartComplementariosComunicacionRedes = new Chart(ctxComplementariosComunicacionRedes, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Análisis de la realidad local',
                                    'Integración a las familias',
                                    'Trabajo en red eclesial',
                                    'Redes sociales'
                                ],
                                datasets: [{
                                    label: 'Elementos complementarios por área',
                                    data: [
                                        <?= $data["5.6"] ?>,
                                        <?= $data["5.5"] ?>,
                                        <?= $data["5.4"] ?>,
                                        <?= $data["5.2"] ?>
                                    ],
                                    backgroundColor: generalColorOp,
                                    borderColor: generalColor,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                indexAxis: 'y',
                                legend: {
                                    position: 'right',
                                },
                                scale: {
                                    min: 0,
                                    max: 1,
                                    stepSize: 0.5
                                }
                            }
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
                <a href="<?= BASEURL ?>" class="btn btn-primary text-center w-100">📝 Volver a realizar el formulario</a>
            </div>
        </div>

    </div>


</div>


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