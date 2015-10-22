<?php

namespace Devices;

abstract class AbstractDevice
{
    abstract public function getType();
    abstract public function getBrand();
    abstract public function getModel();
    abstract public function getPrice();
    abstract public function getScreenSize();

    abstract public function setType($type);
    abstract public function setBrand($brand);
    abstract public function setModel($model);
    abstract public function setPrice($price);
    abstract public function setScreenSize($screenSize);

    public function __toString()
    {
        $str = "Type of device: " . $this->getType() . "<br>\n";
        $str .= 'Brand: ' . $this->getBrand() . "<br>\n";
        $str .= 'Model: ' . $this->getModel() . "<br>\n";
        $str .= 'Price: ' . $this->getPrice() . "<br>\n";
        $str .= 'ScreenSize: ' . $this->getScreenSize() . "<br>\n";

        return $str;
    }

}
