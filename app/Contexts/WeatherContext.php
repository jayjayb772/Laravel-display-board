<?php


namespace App\Contexts;


class WeatherContext
{
    public static function getCurrentWeather(): array
    {
        return ['cur-temp'=>rand(60,80), 'cur-conditions'=>'sunny'];
    }

}