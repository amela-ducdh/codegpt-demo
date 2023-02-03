<?php

$apiKey = "your_api_key_here";
$cityId = 1581130;
$weatherData = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=$cityId&APPID=$apiKey"), true);
$temperature = $weatherData["main"]["temp"];
echo "The current temperature in Hanoi is: " . $temperature . " Kelvin";

?>
