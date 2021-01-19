<?php

namespace Liloi\MathAlg\Linear;

/**
 * Matrix entity.
 *
 * @package Liloi\MathAlg\Linear
 */
class Matrix
{
    private $data = [];

    public function __construct(...$parameters)
    {
        $first = reset($parameters);

        if(is_array($first))
        {
            $this->data = $first;
            return;
        }

        if(is_numeric($first))
        {
            $delta = 2;

            for($row=1;$row<=$parameters[0];$row++)
            {
                for($column=1;$column<=$parameters[1];$column++)
                {
                    $this->data[$row-1][$column-1] = $parameters[$delta++] ?? 0;
                }
            }
        }
    }

    public function get($row, $column)
    {
        return $this->data[$row-1][$column-1];
    }
}