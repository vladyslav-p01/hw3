<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.10.15
 * Time: 23:21
 */

namespace Devices;


class Phones extends Device {

    protected $communicationInterfaces = array('GSM');
    protected $phoneFormFactor;

    /**
     * @return array
     */
    public function getCommunicationInterfaces()
    {
        return $this->communicationInterfaces;
    }

    /**
     * @param array $communicationInterfaces
     */
    public function setCommunicationInterfaces(array $communicationInterfaces)
    {
        $this->communicationInterfaces = $communicationInterfaces;
    }

    /**
     * @return mixed
     */
    public function getPhoneFormFactor()
    {
        return $this->phoneFormFactor;
    }

    /**
     * @param mixed $phoneFormFactor
     */
    public function setPhoneFormFactor($phoneFormFactor)
    {
        $this->phoneFormFactor = $phoneFormFactor;
    }


}