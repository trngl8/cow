<?php

namespace App;

require_once __DIR__.'/vendor/autoload.php';

$herd = new Herd(Cow::class, 10);
$herd->move(100);

echo "Herd has " . count($herd->getAnimals()) . " items ".Cow::class." and ". $herd->getPosition() . " position ". "\n";

$herd = new Herd(Sheep::class, 20);
$herd->move(10);

echo "Herd has " . count($herd->getAnimals()) . " items ".Sheep::class." and ". $herd->getPosition() . " position ". "\n";