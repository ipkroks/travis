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
        $model = new Catalog(1, 'Репитер');
        $this->assertEquals($model->getName(), 'Репитер');
    }

    public function testGetId(){
        $model = new Catalog(13, 'Репитер');
        $this->assertEquals($model->getId(), 13);
    }
}
