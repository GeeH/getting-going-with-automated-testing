<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require(__DIR__ . './../src/hypotenuse.php');

class HypotenuseTest extends TestCase
{
    public function testHypotenuse()
    {
        self::assertEquals(5, hypotenuse(3, 4));
    }
}
