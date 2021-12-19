<?php

namespace App;

require_once __DIR__.'/vendor/autoload.php';

$herd = new Herd(10);
$herd->move(100);

echo "Herd has " . count($herd->getCows()) . " items and ". $herd->getPosition() . " position ". "\n";