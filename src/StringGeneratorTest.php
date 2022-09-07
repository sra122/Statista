<?php

namespace Sravankatta\Statics;

use PHPUnit\Framework\TestCase;

final class StringGeneratorTest extends TestCase
{

    public function testManipulationString()
    {
        $stringGenerator = new StringGenerator();
        $result = $stringGenerator->stringManipulation();

        $this->assertStringContainsString("Fizz", $result[3]);
        $this->assertStringContainsString("Buzz", $result[5]);
        $this->assertStringContainsString("FizzBuzz", $result[15]);
        $this->assertStringContainsString("1", $result[1]);
    }

}
