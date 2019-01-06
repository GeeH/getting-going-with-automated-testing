<?php

class HypotenuseTest extends \PHPUnit\Framework\TestCase
{
    public function testHypotenuse()
    {
        $hypotenuse = new \Hypotenuse\Hypotenuse();

        self::assertEquals(14.866068747318506, $hypotenuse->complexHypotenuse(10, 11));
    }
}
