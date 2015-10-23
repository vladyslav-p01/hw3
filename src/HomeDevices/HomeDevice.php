<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.10.15
 * Time: 14:46
 */

namespace HomeDevices;

use Devices\Device;

class HomeDevice extends Device implements HomeDeviceInterface
{
    protected $devicePurpose;

    /**
     * @return mixed
     */
    public function getDevicePurpose()
    {
        return $this->devicePurpose;
    }

    /**
     * @param mixed $devicePurpose
     */
    public function setDevicePurpose($devicePurpose)
    {
        $this->devicePurpose = $devicePurpose;
    }






}