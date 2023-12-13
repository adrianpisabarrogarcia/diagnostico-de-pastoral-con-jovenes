<?php
// Session
global $i18n, $lang;
session_start();

//Modo debug
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
header("Cache-Control: no-cache");
mb_internal_encoding("UTF-8");


// Constants
$basedirAux = str_replace('/nav', '', __DIR__);
$basedirAux = str_replace('\nav', '', $basedirAux);

define("BASEDIR", $basedirAux);
define("BASEURL", "/DiagnosticoPastoralConJovenesForm");

// Includes
require_once BASEDIR . "/conexionBBDD.php";
require_once BASEDIR . "/i18n.php";


?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- meta description -->
    <meta name="description"
          content="¿Tienes curiosidad por ver que fortalezas y debilidades tiene tu pastoral? Esta es la mejor evaluación,
          que te mostrará en que áreas y competencias debes mejorar o de lo contrario celebrar.">
    <meta name=”keywords” content=“Diagnostico”>
    <meta name=”keywords” content=“Pastoral”>
    <meta name=”keywords” content=“Jóvenes”>
    <meta name=”keywords” content=“Evaluación”>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo BASEURL; ?>/assets/img/favicon.jpg" type="image/x-icon">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"
            integrity="sha256-7lWo7cjrrponRJcS6bc8isfsPDwSKoaYfGIHgSheQkk=" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/styles.css">

    <title><?= $i18n[$lang]['titulo'] ?></title>
</head>

    <div id="languages" class="p-2 m-3 rounded float-start">
        <?php
        $urlEs = '?lang=es';
        $urlEn = '?lang=en';
        $urlFr = '?lang=fr';
        if (isset($_GET['id'])) {
            $urlEs .= '&id=' . $_GET['id'];
            $urlEn .= '&id=' . $_GET['id'];
            $urlFr .= '&id=' . $_GET['id'];
        }
        ?>
        <div>
            <span class="d-flex align-items-center"><img src="<?= BASEURL ?>/assets/img/es.png" width="17">&nbsp;<a class="enlaces" href="<?= $urlEs ?>"><?= $i18n[$lang]['castellano'] ?></a></span>
        </div>
        <div>
            <span class="d-flex align-items-center"><img src="<?= BASEURL ?>/assets/img/en.png" width="17">&nbsp;<a class="enlaces" href="<?= $urlEn ?>"><?= $i18n[$lang]['ingles'] ?></a></span>
        </div>
        <div>
            <span class="d-flex align-items-center"><img src="<?= BASEURL ?>/assets/img/fr.png" width="17">&nbsp;<a class="enlaces" href="<?= $urlFr ?>"><?= $i18n[$lang]['frances'] ?></a></span>
        </div>
    </div>
<body>
<div class="container-fluid">