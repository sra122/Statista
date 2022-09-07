<?php

namespace Sravankatta\Statics;

class StringGenerator
{
    public function stringManipulation(): array {
        $stringList = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i%5 === 0 && $i%3 === 0) {
                echo "FizzBuzz \n";
                $stringList[$i] = "FizzBuzz";
            } else if ($i%5 === 0) {
                echo "Buzz \n";
                $stringList[$i] = "Buzz";
            } else if ($i%3 === 0) {
                echo "Fizz \n";
                $stringList[$i] = "Fizz";
            } else {
                echo $i . "\n";
                $stringList[$i] = $i;
            }
        }
        return $stringList;
    }
}