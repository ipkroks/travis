<?php

namespace tests\models;

use PHPUnit\Framework\TestCase;
use app\models\Math;

/**
 * Class MathTest
 * @package tests\models
 */
class MathTest extends TestCase
{
    public function testGetName(){
        $model = new Math;
        $this->assertEquals(8, $model->mypow(2, 3));
    }
}