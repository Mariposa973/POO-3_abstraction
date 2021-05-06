<?php 
namespace App;

Class Speedometer
{
    public const KM_TO_MILES_CONVERSION = 0.621371;
    public const MILES_TO_KM_CONVERSION = 1.60934;

    public static function convertKmToMiles(int $kilometers): float
    {
        return $kilometers * self::KM_TO_MILES_CONVERSION;
    }
    public static function convertMilesToKm(int $miles): float
    {
        return $miles * self::MILES_TO_KM_CONVERSION;
    }
}



echo Speedometer::convertKmToMiles(10);
