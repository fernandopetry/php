<?php

namespace App\System;

/**
 *     
 * 
 * Classe: ControllerFactory
 * 
 * @filesource ControllerFactory.php
 * @package php_golfiere
 * @subpackage 
 * @category
 * @version v1.0
 * @since 05/06/2017 19:45:39
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class ControllerFactory
{

    /** @var \App\Uri\iParseURL */
    private $router;

    /**
     * @param \App\Uri\iParseURL $router
     */
    public function __construct(\App\Uri\iParseURL $router)
    {
        $this->router = $router;
        $namespace    = '\App\Controllers\%sController';

        $controller = $this->router->getController();
        $action     = $this->router->getAction();
        $params     = $this->router->getParams();

        $type = sprintf($namespace, ucfirst($controller));
        $file = $this->fileExists($type);

        if ($file) {
            $controller = new $type();
        } else {
            throw new \Exception('ControllerFactory: Class ' . $type . ' not found.');
        }

        if ($params) {
            return call_user_func_array(array($controller, $action), $params);
        } else {
            if (method_exists($controller, $action)) {
                return call_user_func(array($controller, $action));
            } else {
                throw new \Exception('ControllerFactory: Action not found!');
            }
        }
    }

    private function fileExists($type)
    {
        $file = dirname(dirname(dirname(__FILE__))) . $type . '.php';
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);

        return file_exists($file);
    }

}
