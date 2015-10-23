<?php
require 'vendor/autoload.php';

use Devices\Phones;
use Devices\Notebooks;
use HomeDevices\HomeDevice;
use Shopping\ShoppingList;

$LenovoG90 = new Phones();
$LenovoG90->setType('Smartphone');
$LenovoG90->setBrand('Lenovo');
$LenovoG90->setModel('G90');
$LenovoG90->setPrice(2300);
$LenovoG90->setScreenSize('5"');
$LenovoG90->setCommunicationInterfaces(array('GSM', 'WiFi', 'BT', '3G'));
$LenovoG90->setPhoneFormFactor('touchscreen monoblock');
echo $LenovoG90;
echo "<br><br>";

$AsusROG = new Notebooks('Notebook', 'Asus', 'ROG', 7000, '17.3', '4.5 kg');
echo $AsusROG;
echo "<br><br>";
$AsusROG->setModel('ROG G256 AX');
echo $AsusROG;
$AsusROG->gift = "Mouse Logitech a380";
echo $AsusROG->gift, "<br>\n";
echo "<br>\n";

$TV = new HomeDevice();
$TV->setType('Televisor');
$TV->setBrand('LG');
$TV->setModel('M520');
$TV->setPrice(5000);
$TV->setScreenSize('32"');
$TV->setDevicePurpose('Rest,fun');
echo $TV;
echo 'Device purpose: '.$TV->getDevicePurpose(), "<br>\n";
echo "<br>\n";

$buyList = [$LenovoG90, $AsusROG, $TV];
echo ShoppingList::getProductCostList($buyList);
echo "<br>\n";
echo ShoppingList::getTotalCots($buyList);


