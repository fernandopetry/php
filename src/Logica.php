<?php
/**
 * Created by PhpStorm.
 * User: daniel.golfieri
 * Date: 05/06/2017
 * Time: 12:46
 */

namespace Golfieri\PHP;

use Linio\Component\Util\Inflector;

class Logica
{
    public function Sum(int $a, int $b): int
    {
        return $a + $b;
    }

    public function  Camelize(string $a): string
    {
        //Inflector::pascalize($a);
        return Inflector::camelize($a);
    }
}