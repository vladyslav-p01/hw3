<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.10.15
 * Time: 21:21
 */

namespace Devices;


class Device extends AbstractDevice
{

    protected $type;
    protected $brand;
    protected $model;
    protected $price;
    protected $screenSize;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }


    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return mixed
     */
    public function getScreenSize()
    {
        return $this->screenSize;
    }


    /**
     * @param $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @param $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }


    /**
     * @param $screenSize
     */
    public function setScreenSize($screenSize)
    {
        $this->screenSize = $screenSize;
    }



}