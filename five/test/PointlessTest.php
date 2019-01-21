<?php

class PointlessTest extends \PHPUnit\Framework\TestCase
{
    /** @var \Pointless\Pointless */
    private $pointless;

    public function setUp()
    {
        $this->pointless = new Pointless\Pointless();
    }

    public function testIntPassedToPointlessMethodReturnsTrue()
    {
        self::assertTrue($this->pointless->pointlessMethod(100));
    }

    public function testStringPassedToPointlessMethodThrowsException()
    {
        self::expectException(\RuntimeException::class);
        self::expectExceptionMessage('No strings are allowed');

        $this->pointless->pointlessMethod('beer');
    }

    public function testBoolPassedToPointlessMethodReturnsFalse()
    {
        self::assertFalse($this->pointless->pointlessMethod(false));
    }

    public function testArrayPassedToPointlessMethodThrowsException()
    {
        self::expectException(\InvalidArgumentException::class);
        self::expectExceptionMessage('No valid property passed');

        $this->pointless->pointlessMethod([]);
    }
}