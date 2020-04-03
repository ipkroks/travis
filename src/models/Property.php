<?php


namespace app\models;


/**
 * Class Property
 * @package app\models
 */
class Property
{
    private $id;
    private $name;

    public static function create($id, $name)
    {
        $property = new self;
        $property->id = $id;
        $property->name = $name;
        return $property;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}