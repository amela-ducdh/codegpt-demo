<?php

// Unit Test Code
class WeatherDataTest extends PHPUnit_Framework_TestCase {
  public function testGetTemperature() {
    $weatherData = new WeatherData("your_api_key_here", 1581130);
    $this->assertEquals("The current temperature in Hanoi is: " .$weatherData->temperature . " Kelvin", $weatherData->getTemperature());
  }  
}
