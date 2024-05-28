<?php

class Weather{
    public static $tempCondition = ['cold', 'mild', 'warm'];

    public static function celciusToFahrenheit($c){
        return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
        if ($f < 40) {
            # code...
            return self::$tempCondition[0];
        } 
        else if ($f < 70) {
            # code...
            return self::$tempCondition[1];
        } 
        else{
        return self::$tempCondition[2];
        }
    }
}
    // print_r(Weather::$tempCondition);
    echo weather::determineTempCondition(90);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>