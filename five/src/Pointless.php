<?php

namespace Pointless;

use Monolog\Logger;

class Pointless
{
    /** @var Logger */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function pointlessMethod($property) : bool
    {
        if (is_int($property)) {
            $this->logger->info('$property was int');
            return true;
        }

        if (is_string($property)) {
            $this->logger->error('$property was string');
            throw new \RuntimeException('No strings are allowed');
        }

        if (is_bool($property)) {
            $this->logger->info('$property was bool');
            return false;
        }

        $this->logger->error('$property was invalid');
        throw new \InvalidArgumentException('No valid property passed');
    }
}
