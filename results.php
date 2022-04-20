<?php require_once "./nav/header.php"; ?>
<?php
//destroy session
session_destroy();


if (!isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header("Location: " . BASEURL);
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
    header("Location: " . BASEURL);
}

?>

<div class="row justify-content-center align-items-center">
    <div class="mt-5 mb-5 p-3 p-md-5 m-5 col-11 rounded" id="scuare">

        <!-- title -->
        <h3 class="text-center ">LOS RESULTADOS 🧮</h3>
        <p class="text-center">Evaluar es algo importante, felicitaciones por las áreas en las que has cumplido las
            expectativas 🥳 y recuerda mejorar las que son más débiles 👨‍🔧.</p>

        <div class="d-flex flex-column justify-content-center align-content-center align-items-center ali">
            <p class="text-center m-2 primary-color">
                Puedes compartir estos resultados con quien quieras, haciéndole llegar este enlace:
            </p>
            <div class="w-auto text-center input-group">
                <input id="actual-url" type="url" class="form-control" aria-label="url of the page"
                       aria-describedby="url of the page" readonly>
                <button class="btn btn-primary" type="button" id="copy-link">Copiar enlace</button>
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

        <hr class="m-4">

        <!-- the results -->
        <div class="d-flex justify-content-center m-2">
            <img style="width: 10%" src="<?php echo BASEURL; ?>/assets/img/logo.jpg">
        </div>

        <div class="mb-5">
            <h1 class="text-center">HERRAMIENTA</h1>
            <h2 class="text-center">DIAGNÓSTICO PASTORAL</h2>
            <h1 class="text-center">CON JÓVENES</h1>
        </div>

        <?= var_dump($data); ?>

        <!-- first form -->
        <div class="m-2 p-2 rounded primary-bg-color">
            <h3 class="text-center text-white">PERFIL GENERAL PROCESOS DE PASTORAL CON JÓVENES<h3>
        </div>
        <div class="m-5">
            <canvas id="equipo-trabajo"></canvas>
            <script>
                const ctxEquipoTrabajo = document.getElementById('equipo-trabajo').getContext('2d');
                const chartEquipoTrabajo = new Chart(ctxEquipoTrabajo, {
                    type: 'radar',
                    data: {
                        labels: ['Equipo de trabajo', 'Proyecto Evangelizador', 'Proceso/Intinerario', 'Procesos/Transversales', 'Metodología/Acompañamiento', 'Metodología/Personalización', 'Comunicación y redes'],
                        datasets: [
                            {
                                label: 'Resultados',
                                data: [
                                    <?=$data["1.1"]?> + <?=$data["1.2"]?> + <?=$data["1.3"]?> + <?=$data["1.4"]?> + <?=$data["1.5"]?> + <?=$data["1.6"]?>,
                                    <?=$data["2.1"]?> + <?=$data["2.2"]?> + <?=$data["2.3"]?> + <?=$data["2.4"]?> + <?=$data["2.5"]?> + <?=$data["2.6"]?> + <?=$data["2.7"]?> + <?=$data["2.8"]?>,
                                    <?=$data["3.1.1"]?> + <?=$data["3.1.2"]?> + <?=$data["3.1.3"]?> + <?=$data["3.1.4"]?>,
                                    <?=$data["3.2.1"]?> + <?=$data["3.2.2"]?> + <?=$data["3.2.3"]?> + <?=$data["3.2.4"]?> + <?=$data["3.2.5"]?> + <?=$data["3.2.6"]?>,
                                    <?=$data["4.1.1"]?> + <?=$data["4.1.2"]?> + <?=$data["4.1.3"]?> + <?=$data["4.1.4"]?>,
                                    <?=$data["4.2.1"]?> + <?=$data["4.2.2"]?> + <?=$data["4.2.3"]?> + <?=$data["4.2.4"]?>,
                                    <?=$data["5.1"]?> + <?=$data["5.2"]?> + <?=$data["5.3"]?> + <?=$data["5.4"]?> + <?=$data["5.5"]?> + <?=$data["5.6"]?>
                                ],
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        scale: {
                            min: 0,
                            max: 10,
                            stepSize: 1
                        },
                    }
                });
            </script>
        </div>


        <!-- sencond form -->
        <div class="d-md-flex">
            <!-- sencond first form -->
            <div class=" col-md-6">
                <div class="m-2 p-2 rounded primary-bg-color">
                    <h3 class="text-center text-white">ELEMENTOS ESENCIALES POR ÁREA<h3>
                </div>
                <canvas id="elementos-esenciales-por-area"></canvas>
                <script>
                    const ctxElementosEsencialesPorArea = document.getElementById('elementos-esenciales-por-area').getContext('2d');
                    const chartElementosEsencialesPorArea = new Chart(ctxElementosEsencialesPorArea, {
                        type: 'bar',
                        data: {
                            labels: ['Responsable', 'Equipo Pastoral con Jóvenes'],
                            datasets: [
                                {
                                    label: 'Resultados',
                                    data: [
                                        <?=$data["1.4"]?>,
                                        <?=$data["1.1"]?>
                                    ],
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1
                                }
                            ]
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
                            },
                        }
                    });
                </script>
            </div>
            <!-- sencond first form -->
            <div class=" col-md-6">
                <div class="m-2 p-2 rounded primary-bg-color">
                    <h3 class="text-center text-white">ELEMENTOS COMPLEMENTARIOS POR ÁREA<h3>
                </div>
                <canvas id="elementos-complementarios-por-area"></canvas>
                <script>
                    const ctxElementosComplementariosPorArea = document.getElementById('elementos-complementarios-por-area').getContext('2d');
                    const chartElementosComplementariosPorArea = new Chart(ctxElementosComplementariosPorArea, {
                        type: 'bar',
                        data: {
                            labels: ['Comunicación', 'Recursos', 'Estabilidad', 'Formación'],
                            datasets: [
                                {
                                    label: 'Resultados',
                                    data: [
                                        <?=$data["1.6"]?>,
                                        <?=$data["1.5"]?>,
                                        <?=$data["1.3"]?>,
                                        <?=$data["1.2"]?>,
                                    ],
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            indexAxis: 'y',
                            legend: {
                                position: 'right',
                            },
                            scales: {
                                stepSize: 0.2,
                                max: 1,
                                min: 0,
                            },
                        }
                    });
                </script>
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
