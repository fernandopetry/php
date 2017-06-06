<?php

namespace App\System;

/**
 *     
 * 
 * Classe: Controller
 * 
 * @filesource Controller.php
 * @package php_golfiere
 * @subpackage 
 * @category
 * @version v1.0
 * @since 05/06/2017 19:33:39
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Controller
{

    /**
     * @var \App\Uri\iParseURL
     */
    private $uri;

    /**
     * @param \App\Uri\iParseURL $uri
     */
    public function __construct(\App\Uri\iParseURL $uri)
    {
        $this->uri = $uri;
        $this->load();
    }

    private function load()
    {
        new ControllerFactory($this->uri);
    }

}
