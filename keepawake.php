<?php

$loader = require __DIR__ . '/vendor/autoload.php';

$hk = new \HKAPI\API('192.168.1.25', 10025, new \HKAPI\Devices\AVR());

echo "Wake\n";
$hk->zone('Main Zone')->on();
sleep(2);
$hk->zone('Main Zone')->heartAlive();
sleep(2);

echo "Cycle display brightness ...\n";
$hk->zone('Main Zone')->dim();
sleep(2);

echo "Medium\n";
$hk->zone('Main Zone')->dim();
sleep(2);

echo "Off\n";
$hk->zone('Main Zone')->dim();
sleep(2);

echo "On\n";
$hk->zone('Main Zone')->dim();
