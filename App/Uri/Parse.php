<?php

namespace App\Uri;

/**
 *  Classe responsável em fazer o parse na URL   
 * 
 * Classe: Parse
 * 
 * @filesource Parse.php
 * @package php_golfiere
 * @subpackage 
 * @category
 * @version v1.0
 * @since 05/06/2017 19:11:04
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Parse implements iParseURL
{

    private $get;
    private $controller;
    private $action;
    private $params;

    public function __construct()
    {
        $this->get = filter_input(INPUT_GET, 'router');
        $this->separate();
    }

    private function separate()
    {
        $partials = $this->partials();

        $this->controller = array_shift($partials);
        $this->action     = array_shift($partials);
        $this->params     = $partials;

        $this->controller = (is_null($this->controller)) ? 'index' : $this->controller;
        $this->action     = (is_null($this->action)) ? 'index' : $this->action;
    }

    private function partials(): array
    {
        $partials = explode('/', $this->get);

        if (!isset($partials[0])) {
            return [];
        }

        if ($partials[0] == '/' || empty($partials[0])) {
            unset($partials[0]);
        }

        if (empty($partials)) {
            return [];
        }

        return $partials;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getParams()
    {
        return $this->params;
    }

}
