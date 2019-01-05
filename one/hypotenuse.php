<?php
declare(strict_types=1);

function hypotenuse($firstSide, float $secondSide): float
{
    return sqrt($firstSide * $firstSide + $secondSide * $secondSide);
}

assert(hypotenuse(3, 4) === 5.0, "Hypotenuse of 3 & 4 should be 5");