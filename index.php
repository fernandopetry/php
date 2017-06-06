<?php

/**
 * Created by PhpStorm.
 * User: daniel.golfieri
 * Date: 05/06/2017
 * Time: 17:20
 */
// forçando a exibição de erros
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

try {
    require 'vendor/autoload.php';
    new \App\System\Controller(new App\Uri\Parse);
} catch (Exception $e) {
    $return = ['status' => 'error', 'message' => $e->getMessage()];
    echo Linio\Component\Util\Json::encode($return);
}

