<?php 

class WeatherData {
  private $apiKey;
  private $cityId;
  private $weatherData;
  private $temperature;

  public function __construct($apiKey, $cityId) {
    $this->apiKey = $apiKey;
    $this->cityId = $cityId;
    $this->weatherData = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=$this->cityId&APPID=$this->apiKey"), true);
    $this->temperature = $this->weatherData["main"]["temp"];
  }

  public function getTemperature() {
    return "The current temperature in Hanoi is: " .$this->temperature . " Kelvin";
  }  
}

$weatherData = new WeatherData("your_api_key_here", 1581130);
echo $weatherData->getTemperature();