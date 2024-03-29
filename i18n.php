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
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang != 'es' && $lang != 'en' && $lang !='fr' && $lang != 'pl') {
        $lang = 'es';
    }
    $_SESSION['language'] = $lang;
}


#List of all sentences in the language
#Available languages: en (english), es (spanish), fr (french), pl (polish)

$i18n = [
    'es' => [
        'titulo' => '🛠 Herramienta de diagnóstico pastoral con jóvenes',
        'descripcion' => "¿Tienes curiosidad por ver que fortalezas y debilidades tiene tu pastoral? Esta es la mejor evaluación, que te mostrará en que áreas y competencias debes mejorar o de lo contrario celebrar.",
        'castellano' => 'Castellano',
        'ingles' => 'Inglés',
        'frances' => 'Francés',
        'polaco' => 'Polaco',
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
        'tituloPrimeraPregunta' => 'EQUIPO DE PASTORAL',
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
        'verResultados' => 'Ver resultados ➡️',
        'losResultados' => 'LOS RESULTADOS 🧮',
        'descripcionResultados' => 'La herramienta que te presentamos te ofrece hacer un diagnóstico rápido (individual o en equipo) de tu pastoral con jóvenes. Para ello hemos repartido un total de 70 puntos entre los 7 bloques que se evalúan, de modo que cada uno de ellos valga 10 puntos. En cada bloque hay algunos “elementos esenciales” que, por su importancia, valen 3 puntos y el resto, como “elementos complementarios”, valen 1 punto. Esta ponderación viene determinada por nuestra manera de entender la pastoral con jóvenes, pero en un análisis posterior tú mismo puedes valorarla desde tus propias convicciones o acentos con los resultados que te ofrecemos.',
        'compartirResultados' => 'Puedes compartir estos resultados con quien quieras, incluso guardarte el enlace para ti mismo:',
        'copiarEnlace' => 'Copiar enlace',
        'imprimirResultados' => 'Imprimir resultados',
        'hasCopiado' => 'Acabas de copiar el enlace al portapapeles.',
        'tituloPrimerBloque' => 'PERFIL GENERAL PROCESOS DE PASTORAL CON JÓVENES',
        'equipoTrabajo' => 'Equipo de trabajo',
        'proyectoEvangelizador' => 'Proyecto evangelizador',
        'procesoItinerario' => 'Proceso/Itinerario',
        'procesosTransversales' => 'Procesos/Transversales',
        'metodologiaAcompanamiento' => 'Metodología/Acompañamiento',
        'metodologiaPersonalizacion' => 'Metodología/Personalización',
        'comunicacionRedes' => 'Comunicación y Redes',
        'esenciales' => 'Esenciales (sobre 3)',
        'complementarios' => 'Complementarios (sobre 1)',
        'tituloSegundoBloque' => 'EQUIPO DE TRABAJO',
        'equipoPastoralConJovenes' => 'Equipo Pastoral con Jóvenes',
        'responsable' => 'Responsable',
        'formacion' => 'Formación',
        'estabilidad' => 'Estabilidad',
        'recursos' => 'Recursos',
        'comunicacion' => 'Comunicación',
        'tituloTercerBloque' => 'PROYECTO EVANGELIZADOR',
        'proyecto' => 'Proyecto',
        'programacionAnual' => 'Programación anual',
        'evaluacionPeriodica' => 'Evaluación periódica',
        'planMejora' => 'Plan de mejora',
        'presupuesto' => 'Presupuesto',
        'principios' => 'Principios',
        'perfilAnimadores' => 'Perfil animadores',
        'estructuraPastoral' => 'Estructura pastoral',
        'tituloCuartoBloque' => 'PROCESO - ITINERARIO',
        'itinerarioPastoralConJovenes' => 'Itinerario Pastoral con Jóvenes',
        'comunidadCristiana' => 'Comunidad cristiana',
        'discernimientoVocacional' => 'Discernimiento vocacional',
        'vocacion' => 'Vocación',
        'tituloQuintoBloque' => 'PROCESO - TRANSVERSALES',
        'ofertaGruposDeFe' => 'Oferta grupos de fe',
        'formacionLideres' => 'Formación de líderes',
        'voluntarioServicio' => 'Voluntariado/Servicio',
        'tiempoLibre' => 'Tiempo libre',
        'celebracionesLiturgicas' => 'Celebraciones litúrgicas',
        'oracion' => 'Oración',
        'tituloSextoBloque' => 'METODOLOGÍA - ACOMPAÑAMIENTO',
        'acompanamientoPersonal' => 'Acompañamiento personal',
        'encuentrosConComunidadesCristianas' => 'Encuentros con comunidades cristianas',
        'procesoPastoralCoherente' => 'Proceso de pastoral coherente',
        'formacionEnAcompanamiento' => 'Formación en acompañamiento',
        'tituloSeptimoBloque' => 'METODOLOGÍA - PERSONALIZACIÓN',
        'pedagogiaExperiencial' => 'Pedagogía experiencial',
        'experienciasFuertes' => 'Experiencias fuertes',
        'momentosDeDiscernimiento' => 'Momentos de discernimiento',
        'jovenesLideres' => 'Jóvenes líderes',
        'tituloOctavoBloque' => 'COMUNICACIÓN Y REDES',
        'estrategiasDeComunicacion' => 'Estrategias de comunicación',
        'encuentrosInterinstitucionales' => 'Encuentros interinstitucionales',
        'redesSociales' => 'Redes sociales',
        'trabajoEnRedEclesial' => 'Trabajo en red eclesial',
        'integracionALasFamilias' => 'Integración a las familias',
        'analisisDeLaRealidadLocal' => 'Análisis de la realidad local',
        'iraRPJ' => 'Ir a rpj.es',
        'volverARealizarElFormulario' => 'Volver a realizar el formulario',
        'nota' => 'Nota:',
        'perfilGeneral' => 'Perfil general',
    ],
    'en' => [
        'titulo' => '🛠 Pastoral Diagnostic Tool for Youth',
        'descripcion' => "Are you curious to see what are the strengths and weaknesses of your pastoral work? This is the best assessment, which will show you in which areas and skills you need to improve or otherwise celebrate.",
        'castellano' => 'Spanish',
        'ingles' => 'English',
        'frances' => 'French',
        'polaco' => 'Polish',
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
        'tituloPrimeraPregunta' => 'PASTORAL TEAM',
        'tituloSegundaPregunta' => 'EVANGELIZING PROJECT',
        'tituloTerceraPreguntaUno' => 'ITINERARY',
        'tituloTerceraPreguntaDos' => 'TRANSVERSAL',
        'tituloCuartaPregunta' => 'METHODOLOGY',
        'tituloCuartaPreguntaUno' => 'ACCOMPANIMENT',
        'tituloCuartaPreguntaDos' => 'PERSONALIZATION',
        'tituloQuinta' => 'COMMUNICATION AND NETWORKS',
        'noNunca' => 'No/Never',
        'pocoAVeces' => 'Little/Sometimes',
        'bastanteCasiSiempre' => 'Quite/Almost always',
        'siSiempre' => 'Yes/Always',
        'siguiente' => 'Next',
        'progresoCuestionario' => 'Questionnaire progress:',
        'verResultados' => 'See results ➡️',
        'losResultados' => 'THE RESULTS 🧮',
        'descripcionResultados' => 'The tool that we present to you offers you to make a quick diagnosis (individual or in a team) of your pastoral ministry with young people. For this we have distributed a total of 70 points among the 7 blocks that are evaluated, so that each of them is worth 10 points. In each block there are some "essential elements" that, due to their importance, are worth 3 points and the rest, as "complementary elements", are worth 1 point. This weighting is determined by our way of understanding pastoral ministry with young people, but in a later analysis you can value it from your own convictions or accents with the results we offer you.',
        'compartirResultados' => 'You can share these results with whoever you want, even save the link for yourself:',
        'copiarEnlace' => 'Copy link',
        'imprimirResultados' => 'Print results',
        'hasCopiado' => 'You have copied the link to the results',
        'tituloPrimerBloque' => 'GENERAL PROFILE OF YOUTH MINISTRY PROCESSES',
        'equipoTrabajo' => 'Work team',
        'proyectoEvangelizador' => 'Evangelizing project',
        'procesoItinerario' => 'Process/Itinerary',
        'procesosTransversales' => 'Processes/Transversals',
        'metodologiaAcompanamiento' => 'Methodology/Accompaniment',
        'metodologiaPersonalizacion' => 'Methodology/Personalization',
        'comunicacionRedes' => 'Communication/Networks',
        'esenciales' => 'Essentials (about 3)',
        'complementarios' => 'Complementary (about 1)',
        'tituloSegundoBloque' => 'WORK TEAM',
        'equipoPastoralConJovenes' => 'Youth Ministry Team',
        'responsable' => 'Responsible',
        'formacion' => 'Training',
        'estabilidad' => 'Stability',
        'recursos' => 'Resources',
        'comunicacion' => 'Communication',
        'tituloTercerBloque' => 'EVANGELIZING PROJECT',
        'proyecto' => 'Project',
        'programacionAnual' => 'Annual programming',
        'evaluacionPeriodica' => 'Periodic evaluation',
        'planMejora' => 'Improvement plan',
        'presupuesto' => 'Budget',
        'principios' => 'Principles',
        'perfilAnimadores' => 'Profile of animators',
        'estructuraPastoral' => 'Pastoral structure',
        'tituloCuartoBloque' => 'ITINERARY',
        'itinerarioPastoralConJovenes' => 'Youth Ministry Itinerary',
        'comunidadCristiana' => 'Christian community',
        'discernimientoVocacional' => 'Vocational discernment',
        'vocacion' => 'Vocation',
        'tituloQuintoBloque' => 'PROCESS - TRANSVERSALS',
        'ofertaGruposDeFe' => 'Offer of faith groups',
        'formacionLideres' => 'Training of leaders',
        'voluntarioServicio' => 'Volunteer/Service',
        'tiempoLibre' => 'Free time',
        'celebracionesLiturgicas' => 'Liturgical celebrations',
        'oracion' => 'Prayer',
        'tituloSextoBloque' => 'METHODOLOGY - ACCOMPANIMENT',
        'acompanamientoPersonal' => 'Personal accompaniment',
        'encuentrosConComunidadesCristianas' => 'Encounters with Christian communities',
        'procesoPastoralCoherente' => 'Coherent pastoral process',
        'formacionEnAcompanamiento' => 'Training in accompaniment',
        'tituloSeptimoBloque' => 'METHODOLOGY - PERSONALIZATION',
        'pedagogiaExperiencial' => 'Experiential pedagogy',
        'experienciasFuertes' => 'Strong experiences',
        'momentosDeDiscernimiento' => 'Moments of discernment',
        'jovenesLideres' => 'Young leaders',
        'tituloOctavoBloque' => 'COMMUNICATION - NETWORKS',
        'estrategiasDeComunicacion' => 'Communication strategies',
        'encuentrosInterinstitucionales' => 'Inter-institutional meetings',
        'redesSociales' => 'Social networks',
        'trabajoEnRedEclesial' => 'Work in ecclesial network',
        'integracionALasFamilias' => 'Integration into families',
        'analisisDeLaRealidadLocal' => 'Analysis of the local reality',
        'iraRPJ' => 'Go to rpj.es',
        'volverARealizarElFormulario' => 'Do the questionnaire again',
        'nota' => 'Mark:',
        'perfilGeneral' => 'General profile',
    ],
    'fr' => [
        'titulo' => '🛠 Outil de diagnostic pastoral avec les jeunes',
        'descripcion' => "Êtes-vous curieux de voir quelles sont les forces et les faiblesses de votre pastorale ? C'est la meilleure évaluation, qui vous montrera dans quels domaines et compétences vous devez vous améliorer ou au contraire célébrer.",
        'castellano' => 'Espagnol',
        'ingles' => 'Anglais',
        'frances' => 'Français',
        'polaco' => 'Polonais',
        'herramienta' => 'OUTIL',
        'diagnosticoPastoral' => 'DIAGNOSTIC PASTORAL',
        'conJovenes' => 'AVEC LES JEUNES',
        'preguntaInicio' => '<b>Vous voulez savoir si vous avez les🛠 parfaits dans votre ministère?</b> Répondez à ce formulaire et nous vous aiderons à identifier les domaines que vous devez améliorer 👨‍🔧 ou célébrer autrement 🎉.',
        'tuNombre' => '🙋‍♀️&nbsp;Votre nom ',
        'tuEmail' => '✉️&nbsp;Votre adresse électronique ',
        'tuMovimiento' => '⛪️&nbsp;Institution ecclésiale à laquelle vous appartenez ',
        'emailEjemplo' => 'email@exemple.com',
        'bComenzar' => '¡COMMENCER MAINTENANT! 🏁',
        'preguntasSobre' => 'Questions sur: ',
        'preguntasConcretamente' => 'Plus précisément sur le thème :',
        'tituloPrimeraPregunta' => "ÉQUIPE PASTORALE",
        'tituloSegundaPregunta' => 'PROJET ÉVANGÉLISATEUR',
        'tituloTerceraPreguntaUno' => 'ITINÉRAIRE',
        'tituloTerceraPreguntaDos' => 'TRANSVERSAUX',
        'tituloCuartaPregunta' => 'MÉTHODOLOGIE',
        'tituloCuartaPreguntaUno' => 'ACCOMPAGNEMENT',
        'tituloCuartaPreguntaDos' => 'PERSONNALISATION',
        'tituloQuinta' => 'COMMUNICATION ET RÉSEAUX',
        'noNunca' => 'Non/Jamais',
        'pocoAVeces' => 'Un peu/parfois',
        'bastanteCasiSiempre' => 'Assez souvent/Presque toujours',
        'siSiempre' => 'Oui/toujours',
        'siguiente' => 'Suivant',
        'progresoCuestionario' => 'Progression du questionnaire:',
        'verResultados' => 'Voir les résultats ➡️',
        'losResultados' => 'LES RÉSULTATS 🧮',
        'descripcionResultados' => "L'outil que nous vous présentons vous offre de faire un diagnostic rapide (individuel ou en équipe) de votre pastorale avec les jeunes. Pour cela, nous avons réparti un total de 70 points entre les 7 blocs évalués, de sorte que chacun vaille 10 points. Dans chaque bloc, il y a certains « éléments essentiels » qui, en raison de leur importance, valent 3 points et le reste, comme « éléments complémentaires », vaut 1 point. Cette pondération est déterminée par notre façon de comprendre la pastorale avec les jeunes, mais dans une analyse ultérieure, vous pouvez l'évaluer selon vos propres convictions ou accents avec les résultats que nous vous offrons.",
        'compartirResultados' => "Vous pouvez partager ces résultats avec qui vous voulez, même enregistrer le lien pour vous-même :",
        'copiarEnlace' => "Copier le lien",
        'imprimirResultados' => "Imprimer les résultats",
        'hasCopiado' => "Vous venez de copier le lien dans le presse-papiers.",
        'tituloPrimerBloque' => "PROFIL GÉNÉRAL DES PROCESSUS DE PASTORALE AVEC LES JEUNES",
        'equipoTrabajo' => "Équipe de travail",
        'proyectoEvangelizador' => "Projet évangélisateur",
        'procesoItinerario' => "Processus/Itinéraire",
        'procesosTransversales' => "Processus/Transversaux",
        'metodologiaAcompanamiento' => "Méthodologie/Accompagnement",
        'metodologiaPersonalizacion' => "Méthodologie/Personnalisation",
        'comunicacionRedes' => "Communication et Réseaux",
        'esenciales' => "Essentiels (sur 3)",
        'complementarios' => "Complémentaires (sur 1)",
        'tituloSegundoBloque' => "ÉQUIPE DE TRAVAIL",
        'equipoPastoralConJovenes' => "Équipe Pastorale avec les Jeunes",
        'responsable' => "Responsable",
        'formacion' => "Formation",
        'estabilidad' => "Stabilité",
        'recursos' => "Ressources",
        'comunicacion' => "Communication",
        'tituloTercerBloque' => "PROJET ÉVANGÉLISATEUR",
        'proyecto' => "Projet",
        'programacionAnual' => "Programmation annuelle",
        'evaluacionPeriodica' => "Évaluation périodique",
        'planMejora' => "Plan d'amélioration",
        'presupuesto' => "Budget",
        'principios' => "Principes",
        'perfilAnimadores' => "Profil des animateurs",
        'estructuraPastoral' => "Structure pastorale",
        'tituloCuartoBloque' => "PROCESSUS - ITINÉRAIRE",
        'itinerarioPastoralConJovenes' => "Itinéraire Pastoral avec les Jeunes",
        'comunidadCristiana' => "Communauté chrétienne",
        'discernimientoVocacional' => "Discernement vocationnel",
        'vocacion' => "Vocation",
        'tituloQuintoBloque' => "PROCESSUS - TRANSVERSAUX",
        'ofertaGruposDeFe' => "Offre de groupes de foi",
        'formacionLideres' => "Formation des leaders",
        'voluntarioServicio' => "Volontariat/Service",
        'tiempoLibre' => "Temps libre",
        'celebracionesLiturgicas' => "Célébrations liturgiques",
        'oracion' => "Prière",
        'tituloSextoBloque' => "MÉTHODOLOGIE - ACCOMPAGNEMENT",
        'acompanamientoPersonal' => "Accompagnement personnel",
        'encuentrosConComunidadesCristianas' => "Rencontres avec des communautés chrétiennes",
        'procesoPastoralCoherente' => "Processus pastoral cohérent",
        'formacionEnAcompanamiento' => "Formation à l'accompagnement",
        'tituloSeptimoBloque' => 'MÉTHODOLOGIE - PERSONNALISATION',
        'pedagogiaExperiencial' => 'Pédagogie expérimentale',
        'experienciasFuertes' => 'Des expériences fortes',
        'momentosDeDiscernimiento' => 'Moments de discernement',
        'jovenesLideres' => 'Jeunes leaders',
        'tituloOctavoBloque' => 'COMMUNICATION ET MISE EN RÉSEAU',
        'estrategiasDeComunicacion' => 'Stratégies de communication',
        'encuentrosInterinstitucionales' => 'Réunions interinstitutionnelles',
        'redesSociales' => 'Médias sociaux',
        'trabajoEnRedEclesial' => 'Mise en réseau des églises',
        'integracionALasFamilias' => 'Intégration de la famille',
        'analisisDeLaRealidadLocal' => 'Analyse de la réalité locale',
        'iraRPJ' => 'Aller à rpj.es',
        'volverARealizarElFormulario' => 'Réintroduire le formulaire',
        'nota' => 'Remarque:',
        'perfilGeneral' => 'Profil général',
    ],
    'pl' => [
        'titulo' => '🛠 Narzędzie diagnozujące duszpasterstwo młodzieży',
        'descripcion' => "Czy jesteś ciekawy, jakie są mocne i słabe strony twojej pracy duszpasterskiej? To najlepsza ocena, która pokaże ci, w jakich obszarach i kompetencjach powinieneś się poprawić, a które z kolei należy świętować.",
        'castellano' => 'Hiszpański',
        'ingles' => 'Angielski',
        'frances' => 'Francuski',
        'polaco' => 'Polski',
        'herramienta' => 'NARZĘDZIE',
        'diagnosticoPastoral' => 'DIAGNOZUJĄCE',
        'conJovenes' => 'DUSZPASTERSTWO MŁODZIEŻY',
        'preguntaInicio' => '¿Chciałbyś się dowiedzieć, czy stosujesz odpowiednie 🛠 w swoim duszpasterstwie?</b> Wypełnij ten formularz, a pomożemy Ci ustalić, co powinieneś ulepszyć, 👨‍🔧 a z czego się cieszyć 🎉.',
        'tuNombre' => '🙋‍♀️ Twoje imię ',
        'tuEmail' => '✉️ Mail ',
        'tuMovimiento' => '⛪️ Organizacja kościelna, do której należysz ',
        'emailEjemplo' => 'email@ejemplo.com',
        'bComenzar' => 'ZACZNIJ TERAZ! 🏁',
        'preguntasSobre' => 'Pytania dotyczące: ',
        'preguntasConcretamente' => 'Bardziej szczegółowo na temat:',
        'tituloPrimeraPregunta' => 'ZESPÓŁ PASTERSKI',
        'tituloSegundaPregunta' => 'PLANU EWANGELIZACYJNEGO',
        'tituloTerceraPreguntaUno' => 'MODELU',
        'tituloTerceraPreguntaDos' => 'GŁÓWNYCH WĄTKÓW',
        'tituloCuartaPregunta' => 'METODOLOGII',
        'tituloCuartaPreguntaUno' => 'METODOLOGII',
        'tituloCuartaPreguntaDos' => 'UCZESTNICTWA',
        'tituloQuinta' => 'KOMUNIKACJI I DZIAŁANIE ZESPOŁOWE',
        'noNunca' => 'Nie/Nigdy',
        'pocoAVeces' => 'Trochę/Czasami',
        'bastanteCasiSiempre' => 'Dosyć/Prawie zawsze',
        'siSiempre' => 'Tak/Zawsze',
        'siguiente' => 'Następne',
        'progresoCuestionario' => 'Postępy w wypełnianiu formularza:',
        'verResultados' => 'Zobacz wyniki ➡️',
        'losResultados' => 'WYNIKI 🧮',
        'descripcionResultados' => 'Narzędzie, które proponujemy pozwala na szybką diagnozę duszpasterstwa młodzieży (dokonaną indywidualnie lub w zespole). W tym celu pula 70 punktów została rozdzielona na 7 bloków, które podlegają ocenie w taki sposób, że każdy z bloków może osiągnąć maksymalnie 10 punktów. W każdym z tych bloków są pewne "elementy istotne", które ze względu na swoje znaczenia mają wartość 3 punktów, a pozostałe, jako "elementy uzupełniające" mają wartość 1 punktu. Przyjęcie takiej punktacji wynika z naszego  rozumienia duszpasterstwa młodzieży, ale przy kolejnej analizie zaproponowaną przez nas punktację możesz dowolnie zmieniać w świetle własnych doświadczeń lub postawionych przez siebie akcentów.',
        'compartirResultados' => 'Możesz udostępnić te wyniki dowolnej osobie, a także zachować dla siebie link:',
        'copiarEnlace' => 'Kopiuj link',
        'imprimirResultados' => 'Drukuj wyniki',
        'hasCopiado' => 'Właśnie skopiowałeś link do schowka.',
        'tituloPrimerBloque' => 'OGÓLNY PROFIL DUSZPASTERSTWA MŁODZIEŻY',
        'equipoTrabajo' => 'Zespół duszpasterski',
        'proyectoEvangelizador' => 'Plan ewangelizacyjny',
        'procesoItinerario' => 'Procesy pastoralne/Model',
        'procesosTransversales' => 'Procesy pastoralne/Główne wątki',
        'metodologiaAcompanamiento' => 'Metodologia/Towarzyszenie',
        'metodologiaPersonalizacion' => 'Metodologia/Uczestnictwo',
        'comunicacionRedes' => 'Komunikacja i działanie zespołowe',
        'esenciales' => 'Elementy istotne (za 3 punkty)',
        'complementarios' => 'Elementy uzupełniające (za 1 punkt)',
        'tituloSegundoBloque' => 'ZESPÓŁ DUSZPASTERSKI',
        'equipoPastoralConJovenes' => 'Młodzieżowy Zespół Duszpasterski',
        'responsable' => 'Osoby odpowiedzialne',
        'formacion' => 'Formacja odpowiedzialnych',
        'estabilidad' => 'Utrzymanie stabilności',
        'recursos' => 'Zasoby ludzkie i wsparcie instytucjonalne',
        'comunicacion' => 'Komunikacja z przełożonymi',
        'tituloTercerBloque' => 'PLAN EWANGELIZACYJNY',
        'proyecto' => 'Program duszpasterski',
        'programacionAnual' => 'Planowanie roczne',
        'evaluacionPeriodica' => 'Okresowa i systematyczna ewaluacja',
        'planMejora' => 'Plan naprawczy',
        'presupuesto' => 'Kosztorys/Budżet',
        'principios' => 'Fundamentalne zasady',
        'perfilAnimadores' => 'Profil lidera',
        'estructuraPastoral' => 'Struktura duszpasterstwa',
        'tituloCuartoBloque' => 'PROCESY PASTORALNE - MODEL',
        'itinerarioPastoralConJovenes' => 'Model Duszpasterstwa Młodzieży',
        'comunidadCristiana' => 'Wspólnota chrześcijańska',
        'discernimientoVocacional' => 'Droga rozeznania',
        'vocacion' => 'Powołanie/Moje miejsce w Kościele',
        'tituloQuintoBloque' => 'PROCESY PASTORALNE - GŁÓWNE WĄTKI',
        'ofertaGruposDeFe' => 'Propozycja wspólnoty wiary',
        'formacionLideres' => 'Formacja liderów',
        'voluntarioServicio' => 'Wolontariat/Służba',
        'tiempoLibre' => 'Czas wolny/Integracja',
        'celebracionesLiturgicas' => 'Celebracje liturgiczne',
        'oracion' => 'Modlitwa',
        'tituloSextoBloque' => 'METODOLOGIA - TOWARZYSZENIE',
        'acompanamientoPersonal' => 'Doświadczenie osobistego towarzyszenie',
        'encuentrosConComunidadesCristianas' => 'Spotkania z innymi wspólnotami',
        'procesoPastoralCoherente' => 'Integralne podejście w duszpasterstwie',
        'formacionEnAcompanamiento' => 'Formacja do towarzyszenia innym',
        'tituloSeptimoBloque' => 'METODOLOGIA - UCZESTNICTWO',
        'pedagogiaExperiencial' => 'Pedagogika oparta na doświadczeniu',
        'experienciasFuertes' => 'Przełomowe doświadczenia',
        'momentosDeDiscernimiento' => 'Czas na rozeznanie',
        'jovenesLideres' => 'Młodzi liderzy/Animatorzy',
        'tituloOctavoBloque' => 'KOMUNIKACJA I DZIAŁANIE ZESPOŁOWE',
        'estrategiasDeComunicacion' => 'Strategie komunikacyjne',
        'encuentrosInterinstitucionales' => 'Współpraca z innymi instytucjami',
        'redesSociales' => 'Media społecznościowe',
        'trabajoEnRedEclesial' => 'Kościelne zespoły duszpasterstwa młodzieży',
        'integracionALasFamilias' => 'Zaangażowanie rodzin',
        'analisisDeLaRealidadLocal' => 'Analiza lokalnych potrzeb',
        'iraRPJ' => 'Przejdź do portalu rpj.es',
        'volverARealizarElFormulario' => 'Ponownie wypełnij formularz',
        'nota' => 'Ocena:',
        'perfilGeneral' => 'Ogólny profil',
    ],
];

//echo $i18n[$lang]['title'];