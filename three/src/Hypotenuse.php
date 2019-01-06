<?php
declare(strict_types=1);

namespace Hypotenuse;

use http\Exception\InvalidArgumentException;

class Hypotenuse
{
    function complexHypotenuse(float $firstSide, float $secondSide): float
    {
        if ($firstSide === 3.0 && $secondSide === 4.0) {
            throw new InvalidArgumentException('This function cannot be used with 3 and 4');
        }

        return sqrt($firstSide * $firstSide + $secondSide * $secondSide);
    }
}
