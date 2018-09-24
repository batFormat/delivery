<?php

namespace App;

class Poisson
{
    /**
     * Factorial function
     *
     * @param  integer $number
     * @return integer
     */
    public function factorial($number)
    {
        $sum = 1;
        for ($i = 1; $i <= floor($number); $i++) {
            $sum *= $i;
        }
        return $sum;
    }
    /**
     * Poisson function.
     *
     * @param  integer $chance     The probability
     * @param  integer $occurrence The number of occurances
     * @return float
     */
    public function poisson($chance, $occurrence)
    {
        return exp(-$chance) * pow($chance, $occurrence) / $this->factorial($occurrence);
    }
    /**
     * Poisson function returned as a percentage of 100.
     *
     * @param  integer $chance     The probability
     * @param  integer $occurrence The number of occurances
     * @return float
     */
    public function percentage($chance, $occurrence)
    {
        return call_user_func_array([$this, 'poisson'], func_get_args()) * 100;
    }
    /**
     * Poisson function returned as rounded a percentage of 100.
     *
     * @param  integer $chance     The probability
     * @param  integer $occurrence The number of occurances
     * @param  integer $dp         The number of decimal places to round to
     * @return float
     */
    public function roundedPercentage($chance, $occurrence, $dp = 0)
    {
        return round($this->percentage($chance, $occurrence), $dp);
    }
}
