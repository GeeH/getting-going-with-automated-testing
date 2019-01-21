<?php

class PointlessTest extends \PHPUnit\Framework\TestCase
{
    /** @var \Pointless\Pointless */
    private $pointless;

    /** @var \PHPUnit\Framework\MockObject\MockObject|\Monolog\Logger */
    private $logger;

    public function setUp()
    {
        $this->logger = $this->createMock(\Monolog\Logger::class);
        $this->pointless = new Pointless\Pointless($this->logger);
    }

    public function testIntPassedToPointlessMethodReturnsTrue()
    {
        $this->logger
            ->expects(self::once())
            ->method('info')
            ->with('$property was int')
            ->willReturn(true);

        self::assertTrue($this->pointless->pointlessMethod(100));
    }

    public function testStringPassedToPointlessMethodThrowsException()
    {
        $this->logger
            ->expects(self::once())
            ->method('error')
            ->with('$property was string')
            ->willReturn(true);

        self::expectException(\RuntimeException::class);
        self::expectExceptionMessage('No strings are allowed');

        $this->pointless->pointlessMethod('beer');
    }

    public function testBoolPassedToPointlessMethodReturnsFalse()
    {
        $this->logger
            ->expects(self::once())
            ->method('info')
            ->with('$property was bool')
            ->willReturn(true);

        self::assertFalse($this->pointless->pointlessMethod(false));
    }

    public function testArrayPassedToPointlessMethodThrowsException()
    {
        $this->logger
            ->expects(self::once())
            ->method('error')
            ->with('$property was invalid')
            ->willReturn(true);

        self::expectException(\InvalidArgumentException::class);
        self::expectExceptionMessage('No valid property passed');

        $this->pointless->pointlessMethod([]);
    }
}