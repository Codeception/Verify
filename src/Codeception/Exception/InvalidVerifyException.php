<?php declare(strict_types=1);

namespace Codeception\Exception;

use InvalidArgumentException;

class InvalidVerifyException extends InvalidArgumentException
{
    public function __construct($verifyName, $actual)
    {
        $message = sprintf(
            "%s type can't be used with %s verify.",
            gettype($actual),
            $verifyName
        );

        parent::__construct($message);
    }
}