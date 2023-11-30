<?php

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Url -
define("URL", "http://localhost/tugas1_nadhilah/tugas1_nadhilah");
define("AST", URL . "/layouts/assets");

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Autoload
require_once ROOT. "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();