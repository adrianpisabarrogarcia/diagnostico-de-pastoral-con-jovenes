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
        'preguntasConcretamente' => 'Más concretamente sobre el:',
        'tituloPrimeraPregunta' => 'EL EQUIPO DE TRABAJO',
        'tituloSegundaPregunta' => 'PROYECTO EVANGELIZADOR',
        'tituloTerceraPreguntaUno' => 'ITINERARIO',
        'tituloTerceraPreguntaDos' => 'TRANSVERSALES',
        'tituloCuartaPregunta' => 'METODOLOGÍA',
        'tituloCuartaPreguntaUno' => 'ACOMPAÑAMIENTO',
        'tituloCuartaPreguntaDos' => 'PERSONALIZACIÓN',
        'tituloQuinta' => 'COMUNICACIÓN Y REDES',
        'noNunca' => 'No/Nunca',
        'pocoAVeces' => 'Poco/A veces',
        'bastanteCasiSiempre' => 'Bastante/Casi siempre',
        'siSiempre' => 'Sí/Siempre',
        'siguiente' => 'Siguiente',
        'progresoCuestionario' => 'Progreso del cuestionario:',
        'verResultados' => 'See results ➡️',
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
        'preguntasSobre' => 'Questions about:',
        'preguntasConcretamente' => 'More specifically about:',
        'tituloPrimeraPregunta' => 'THE WORK TEAM',
        'tituloSegundaPregunta' => 'EVANGELIZING PROJECT',
        'tituloTerceraPreguntaUno' => 'ITINERARY',
        'tituloTerceraPreguntaDos' => 'TRANSVERSAL',
        'tituloCuartaPregunta' => 'METHODOLOGY',
        'tituloCuartaPreguntaUno' => 'ACCOMPANIMENT',
        'tituloCuartaPreguntaDos' => 'PERSONALIZATION',
        'tituloQuinta' => 'COMMUNICATION AND NETWORKS',
        'noNuncas' => 'No/Never',
        'siguiente' => 'Next',
        'progresoCuestionario' => 'Questionnaire progress:',
        'verResultados' => 'See results ➡️',
    ]
];

//echo $i18n[$lang]['title'];