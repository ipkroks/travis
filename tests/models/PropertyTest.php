<?php

namespace tests\models;

use PHPUnit\Framework\TestCase;
use app\models\Property;


class PropertyTest extends TestCase
{
    /*
    public function testGetName(){
        $model = new Property(1, 'Название');
        $this->assertEquals($model->getName(), 'Название');
    }

    public function testGetId(){
        $model = new Property(2, 'Артикул');
        $this->assertEquals($model->getId(), 2);
    }
*/
    public function testCreate(){
        $property = new Property();
        $property->setId(1);
        $property->setName('Вес');
        $this->assertEquals(Property::create(1, 'Вес'), $property);
    }
}