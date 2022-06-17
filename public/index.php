<?php
//Arquitectura front controller

use DI\Container;
use Libs\Core;

$container = new Container;

//auto carga de clases funncionando
require_once "../vendor/autoload.php";

//require_once "../libs/core.php";
//require_once "../app/helpers/helpers.php";

// Cargamos el archivo de configuración .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once "../config/config.php";

$Core = new Core($container);
