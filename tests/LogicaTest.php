<?php
/**
 * Created by PhpStorm.
 * User: daniel.golfieri
 * Date: 05/06/2017
 * Time: 12:45
 */

namespace Golfieri\PHP;


class LogicaTest extends \PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $_logica = new Logica();
        $this->assertEquals(10, $_logica->Sum(5,5));
    }

    public function testCamelize()
    {
        $_logica = new Logica();
        $this->assertEquals('anielGolfieri', $_logica->Camelize('daniel-golfieri'));
    }
}