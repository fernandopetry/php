<?php

namespace App\Controllers;

/**
 *     
 * 
 * Classe: IndexController
 * 
 * @filesource IndexController.php
 * @package php_golfiere
 * @subpackage 
 * @category
 * @version v1.0
 * @since 05/06/2017 21:40:57
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class IndexController
{

    public function index()
    {
        header("Content-type:application/json");
        echo \Linio\Component\Util\Json::encode(['status' => 'OK', 'message' => 'API Running']);
    }

}
