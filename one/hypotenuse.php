<?php
declare(strict_types=1);

function hypotenuse($firstSide, float $secondSide): float
{
    return sqrt(($firstSide * $firstSide) + ($secondSide + $secondSide));
}
