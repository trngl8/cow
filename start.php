<?php

namespace App;

require_once __DIR__.'/vendor/autoload.php';

$cow = new Cow();

echo $cow->voice() . "\n";