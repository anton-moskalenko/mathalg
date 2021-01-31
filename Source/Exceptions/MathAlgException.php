<?php

namespace Liloi\MathAlg\Exceptions;

use Judex\ExtendedException;

/**
 * General algorithms exception.
 *
 * @package Exceptions
 */
class MathAlgException extends ExtendedException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'General algorithms exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x101;
}