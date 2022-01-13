<?php

namespace App;

require_once __DIR__.'/vendor/autoload.php';

echo "===============================\n";
echo "* Welcome to the Farm project * \n";
echo "===============================\n";
echo "\n";

$cowsCount = (int)readline('How many cows in herd?: ');

echo "\n\n";

echo "Build cows:\n";
$herd = new Herd(Cow::class, $cowsCount);

$positionX= (int)readline('Set position to move: ');

$herd->move($positionX);
echo "Herd with $cowsCount cows moved to $positionX\n";

echo "\n Thank you!";