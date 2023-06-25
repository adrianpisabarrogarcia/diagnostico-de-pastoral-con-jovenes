<?php
$lang = 'es';
//if there is session, look if language item is set
if (isset($_SESSION['language'])) {
    //if it is, set the language
    $lang = $_SESSION['language'];
} else {
    //if not, set the language to spanish
    $lang = 'es';
    $_SESSION['language'] = $lang;
}

#if the user change the language, set the new language
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    if($lang != 'es' && $lang != 'en'){
        $lang = 'es';
    }
    $_SESSION['language'] = $lang;
}



#List of all sentences in the language
#Available languages: en, es

$i18n = [
    'es' => [
        'titulo' => '🛠 Herramienta de diagnóstico pastoral con jóvenes',
        'castellano' => 'Castellano',
        'ingles' => 'Inglés',
        'herramienta' => 'HERRAMIENTA',
        'diagnosticoPastoral' => 'DIAGNÓSTICO PASTORAL',
        'conJovenes' => 'CON JÓVENES',
        'preguntaInicio' => '<b>¿Quieres saber si tienes las 🛠 perfectas en tu pastoral?</b> Contesta a este formulario y te ayudaremos a identificar qué áreas necesitas mejorar 👨‍🔧 o de lo contrario celebrarlo 🎉.',
        'tuNombre' => '🙋‍♀️&nbsp;Tu nombre ',
        'tuEmail' => '✉️&nbsp;Correo electrónico ',
        'tuMovimiento' => '⛪️&nbsp;Institución eclesial a la que perteneces ',
        'emailEjemplo' => 'email@ejemplo.com',
        'bComenzar' => '¡COMENZAR AHORA! 🏁',
        'preguntasSobre' => 'Preguntas sobre: ',
        'tituloPrimeraPregunta' => 'EL EQUIPO DE TRABAJO',
        ],
    'en' => [
        'titulo' => '🛠 Pastoral Diagnostic Tool for Youth',
        'castellano' => 'Spanish',
        'ingles' => 'English',
        'herramienta' => 'PASTORAL',
        'diagnosticoPastoral' => 'DIAGNOSTIC TOOL',
        'conJovenes' => 'FOR YOUTH',
        'preguntaInicio' => '<b>Do you want to know if you have the perfect 🛠 in your pastoral ministry?</b> Answer this form and we will help you identify areas that need improvement 👨‍🔧 or celebrate 🎉.',
        'tuNombre' => '🙋‍♀️&nbsp;Your name ',
        'tuEmail' => '✉️&nbsp;Email ',
        'tuMovimiento' => '⛪️&nbsp;Ecclesial institution you belong to ',
        'emailEjemplo' => 'email@example.com',
        'bComenzar' => 'START NOW! 🏁',
        'preguntasSobre' => 'Questions about: ',
        'tituloPrimeraPregunta' => 'THE WORK TEAM',
    ]
];

//echo $i18n[$lang]['title'];