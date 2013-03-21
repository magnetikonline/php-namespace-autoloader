<?php
// Namespaced PHP class autoloader example

require(__DIR__ . '/lib/bootstrap.php');

use Magnetikonline\Fruit;
use Magnetikonline\Automobile as DriveThing;

$myApple = new Fruit\Apple();
$myApple->sayWhatIAm();

$myBanana = new Fruit\Banana();
$myBanana->sayWhatIAm();

$myRacecar = new DriveThing\Racecar();
$myRacecar->sayWhatIAm();

echo("\nDone\n");
