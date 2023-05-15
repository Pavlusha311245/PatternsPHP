<?php

namespace Recursion;
class Fibonacci
{
    private function __construct()
    {
        //
    }

    private static function calculate_n_number($number): int
    {
        return (int)((pow(((1 + sqrt(5)) / 2), $number) - pow(((1 - sqrt(5)) / 2), $number))
            / (sqrt(5)));
    }

    public static function sum($number)
    {
        return $number <= 0 ? 0 : self::calculate_n_number($number) + self::sum($number - 1);
    }
}

echo Fibonacci::sum(5);

