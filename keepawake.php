<?php

$loader = require __DIR__ . '/vendor/autoload.php';

$hk = new \HKAPI\API('192.168.1.25', 10025, new \HKAPI\Devices\AVR());

$hk->zone('Main Zone')->on();

sleep(2);
$hk->zone('Main Zone')->heartAlive();
sleep(2);
echo "Volume up\n";
$hk->zone('Main Zone')->volumeUp();
sleep(2);
echo "Volume down\n";
$hk->zone('Main Zone')->volumeDown();
