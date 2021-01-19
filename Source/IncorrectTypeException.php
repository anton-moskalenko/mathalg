<?php

namespace Liloi\MathAlg;

/**
 * Incorrect type exception.
 *
 * @package Exceptions
 */
class IncorrectTypeException extends MathAlgException
{
    /**
     * @inheritdoc
     */
    protected $defaultMessage = 'Incorrect type exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x103;
}