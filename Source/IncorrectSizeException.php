<?php

namespace Liloi\MathAlg;

/**
 * Incorrect size exception.
 *
 * @package Exceptions
 */
class IncorrectSizeException extends MathAlgException
{
    /**
     * @inheritdoc
     */
    protected $defaultMessage = 'Incorrect size exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x102;
}