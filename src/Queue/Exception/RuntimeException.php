<?php

namespace SlmQueue\Queue\Exception;

use RuntimeException as BaseRuntimeException;
use SlmQueue\Exception\ExceptionInterface;

class RuntimeException extends BaseRuntimeException implements ExceptionInterface
{
}
