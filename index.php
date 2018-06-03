<?php
require_once 'autoload.php';

use App\car\Automobile;
use App\Car\ElectricCar;
use App\Car\HybridCar;
use App\Car\HybridCar2;

$automobile = new Automobile();
$automobile->running();

// => ガソリン：100 ％

echo '<br><br>';

$electric_car = new ElectricCar();
$electric_car->running();

// => ガソリン：100 ％

echo '<br><br>';

$hybrid_car = new HybridCar();
$hybrid_car->running();

// => ガソリン：50 ％ 電気：50 ％

echo '<br><br>';

$hybrid_car = new HybridCar2();
$hybrid_car->running();

// => ガソリン：50 ％ 電気：50 ％