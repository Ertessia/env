<?php

declare(strict_types=1);

namespace Ertessia\Env\Exception;

use Exception;

final class EnvironmentVariableNotSetException extends Exception
{
    /**
     * @param string $name
     * @return self
     */
    public static function ofName(string $name): self
    {
        return new self('The environment variable: ' . $name . ' is not set.');
    }
}
