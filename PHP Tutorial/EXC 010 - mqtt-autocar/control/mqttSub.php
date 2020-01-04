<?php

include '../model/mqttGet.php';
$mqtt = new Mqttget();

$mqtt->subscribe();
