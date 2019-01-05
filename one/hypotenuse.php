<?php
declare(strict_types=1);

function hypotenuse($firstSide, float $secondSide): float
{
    return sqrt($firstSide * $firstSide + $secondSide * $secondSide);
}

echo hypotenuse(3.0, 4.0); // should be 5

// php -S 0.0.0.0:8080