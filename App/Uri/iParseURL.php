<?php

namespace App\Uri;

/* * *                                             
 * 
 * 
 * Interface: iParseURL
 * 
 * @filesource iParseURL.php
 * @package php_golfiere
 * @subpackage 
 * @category
 * @version v1.0
 * @since 05/06/2017 19:36:52
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernandosouza2@gmail.com>                                                
 */

interface iParseURL
{

    public function getController();

    public function getAction();

    public function getParams();
}
