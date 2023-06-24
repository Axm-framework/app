<?php

define('AXM_BEGIN_TIME', microtime(true));

// Incluir autoload
require_once __DIR__ . '/vendor/autoload.php';


// Inicializa la aplicación
$app = Axm::iniApplication();

/*
 *---------------------------------------------------------------
 * LANZAR LA APLICACIÓN
 *---------------------------------------------------------------
 * Ahora que todo está configurado, es hora de iniciar la
 * aplicación.
 */
$app->run();
