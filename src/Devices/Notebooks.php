<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.10.15
 * Time: 22:27
 */

namespace Devices;

class Notebooks extends Device {

    protected $operatingSystem;

    protected $weight;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * @param string $operatingSystem
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
    }

    function __construct($type, $brand, $model, $price, $screenSize, $weight, $operatingSystem = 'none')
    {
        $this->type = $type;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->screenSize = $screenSize;
        $this->operatingSystem = $operatingSystem;
        $this->weight = $weight;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= $this->getOperatingSystem() . "<br>\n";
        $str .= $this->getWeight() . "<br>\n";

        return $str;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }


}