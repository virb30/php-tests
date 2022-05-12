<?php

require __DIR__."/../vendor/autoload.php";

use App\Module;

require_once __DIR__.'/../src/functions.php';

$module = new Module();

echo $module->execute($_GET['text']);