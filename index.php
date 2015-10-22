<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.10.15
 * Time: 22:35
 */
require 'vendor/autoload.php';

use Devices\Device;
use Devices\Phones;
use Devices\Notebooks;

$LenovoG90 = new Phones();
$LenovoG90->setType('Smartphone');
$LenovoG90->setBrand('Lenovo');
$LenovoG90->setModel('G90');
$LenovoG90->setPrice('2300 UAH');
$LenovoG90->setScreenSize('5"');
$LenovoG90->setCommunicationInterfaces(array('GSM', 'WiFi', 'BT', '3G'));
$LenovoG90->setPhoneFormFactor('touchscreen monoblock');
echo $LenovoG90;

echo "<br><br>";
$AsusROG = new Notebooks('Notebook', 'Asus', 'ROG', '7000 UAH', '15.6', '4.5 kg');
echo $AsusROG;
$AsusROG->set
