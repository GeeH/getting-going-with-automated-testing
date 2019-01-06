<?php

class HypotenuseTest extends \PHPUnit\Framework\TestCase
{
    /** @var \Hypotenuse\Hypotenuse */
    private $hypotenuse;

    public function setUp()
    {
        $this->hypotenuse = new \Hypotenuse\Hypotenuse();
    }

    public function testHypotenuseReturnsCorrectValueWithGoodParameters()
    {
        self::assertEquals(14.866068747318506, $this->hypotenuse->complexHypotenuse(10, 11));
    }

    public function testHypotenuseThrowsExceptionWithBadParameters()
    {
        self::expectException(\InvalidArgumentException::class);
        self::expectExceptionMessage('This function cannot be used with 3 and 4');

        $this->hypotenuse->complexHypotenuse(3, 4);
    }


}
