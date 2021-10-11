<?php



require_once 'car.php';
$car = new car();
var_dump($car);

$car->color = 'blue';
$car->currentSpeed = 0;
var_dump($car);


echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->start();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getNbWheels();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getCurrentSpeed();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getColor();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getNbSeats();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';


echo $car->getEnergy();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getEnergyLevel();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

?>