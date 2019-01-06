<?php
/**
 * Created by PhpStorm.
 * User: geeh
 * Date: 2019-01-06
 * Time: 11:34
 */

namespace Pointless;


class Pointless
{
    public function pointlessMethod($property) : bool
    {
        if (is_int($property)) {
            return true;
        }

        if (is_string($property)) {
            throw new \RuntimeException('No strings are allowed');
        }

        if (is_bool($property)) {
            return false;
        }

        throw new \InvalidArgumentException('No valid property passed');
    }
}
