<?php

class HypotenuseTest extends \PHPUnit\Framework\TestCase
{
    public function testHypotenuse()
    {
        $hypotenuse = new \Hypotenuse\Hypotenuse();

        self::assertEquals(14.866, $hypotenuse->complexHypotenuse(10, 11));
    }
}
