<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/WeatherStation.php';
require_once __DIR__ . '/classes/PhoneApp.php';
require_once __DIR__ . '/classes/Website.php';
require_once __DIR__ . '/classes/DisplayBoard.php';

$weatherStation = new WeatherStation();

$phoneApp = new PhoneApp();
$website = new Website();
$displayBoard = new DisplayBoard();

$weatherStation->attach($phoneApp);
$weatherStation->attach($website);
$weatherStation->attach($displayBoard);

echo "Weather update 1:" . PHP_EOL;
$weatherStation->setWeatherMessage("Sunny with a high of 30°C.");

echo PHP_EOL . "Weather update 2:" . PHP_EOL;
$weatherStation->detach($displayBoard);
$weatherStation->setWeatherMessage("Storm warning for the afternoon.");
