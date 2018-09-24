<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
// require __DIR__.'/../vendor/autoload.php';
/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/
// $app = require_once __DIR__.'/../bootstrap/app.php';

function factorial($number)
{
        if ($number < 2) {
                return 1;
        } else {
                return ($number * factorial($number-1));
        }
}

function poisson($chance, $occurrence)
{
        $e = exp(1);

        $a = pow($e, (-1 * $chance));
        $b = pow($chance,$occurrence);
        $c = factorial($occurrence);

        return $a * $b / $c;
}

$test = poisson(30,30);
echo $test . "\n";
