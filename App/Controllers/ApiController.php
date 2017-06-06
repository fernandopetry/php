<?php

namespace App\Controllers;

/**
 *     
 * 
 * Classe: ApiController
 * 
 * @filesource ApiController.php
 * @package php_golfiere
 * @subpackage 
 * @category
 * @version v1.0
 * @since 05/06/2017 21:55:41
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class ApiController
{

    public function index()
    {
        header("Content-type:application/json");
        echo \Linio\Component\Util\Json::encode(['status' => 'OK', 'message' => 'API Running']);
    }

    public function user($id = false)
    {
        $users = [
            1 => 'Fernando Petry',
            2 => 'Daniel Golfieri',
            3 => 'Maria da Conceição',
            4 => 'José Apolinário',
            5 => 'Francisco da Silva'
        ];

        header("Content-type:application/json");

        if ($id && array_key_exists($id, $users)) {
            echo \Linio\Component\Util\Json::encode(['status' => 'OK', 'user' => $users[$id]]);
        } elseif (!$id) {
            echo \Linio\Component\Util\Json::encode(['status' => 'OK', 'users' => $users]);
        } else {
            echo \Linio\Component\Util\Json::encode(['status' => 'error', 'message' => 'User not foud!']);
        }
    }

}
