<?php
require "../app/autoload.php";

use Core\Kernel;
use Core\Route;

ini_set("display_errors",1);


$app = new Kernel;

$app->start(new Route);