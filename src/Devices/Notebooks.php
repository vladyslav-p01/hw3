<?php
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

    /**
     * @param $type
     * @param $brand
     * @param $model
     * @param $price
     * @param $screenSize
     * @param $weight
     * @param string $operatingSystem
     */
    public function __construct($type, $brand, $model, $price, $screenSize,
                                $weight, $operatingSystem = 'none')
    {
        $this->type = $type;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->screenSize = $screenSize;
        $this->operatingSystem = $operatingSystem;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $str = parent::__toString();
        $str .= 'Operating system: '.$this->getOperatingSystem() . "<br>\n";
        $str .= 'Weight: '.$this->getWeight() . "<br>\n";

        return $str;
    }




}