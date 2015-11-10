<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.10.15
 * Time: 14:10
 */
namespace HomeDevices;

interface HomeDeviceInterface
{
    public function getDevicePurpose();
    public function setDevicePurpose($purpose);
}