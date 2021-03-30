<?php

namespace tests\models;

use PHPUnit\Framework\TestCase;
use app\models\Catalog;

/**
 * Class CatalogTest
 * @package tests\models
 */
class CatalogTest extends TestCase
{
    public function testGetName(){
        $model = new Catalog(1, 'Антенна');
        $this->assertEquals($model->getName(), 'Антенна');
    }

    public function testGetId(){
        $model = new Catalog(13, 'Антенна');
        $this->assertEquals($model->getId(), 13);
    }
}
