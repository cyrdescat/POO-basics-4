<?php

require_once "Car.php";

$car = new Car("red", 8, "electric");

try {
    $car->start();
} catch (Exception $e) {
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
