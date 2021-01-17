<?php

namespace Liloi\MathAlg\Linear;

use PHPUnit\Framework\TestCase;

/**
 * Check phpUnit testing ability.
 */
class MatrixTest extends TestCase
{
    /**
     * Test {@link Matrix} for values at correct places.
     */
    public function testCheck(): void
    {
        $matrix = new Matrix([[1,2],[3,4]]);

        $this->assertEquals(1, $matrix->get(1,1));
        $this->assertEquals(2, $matrix->get(1,2));
        $this->assertEquals(3, $matrix->get(2,1));
        $this->assertEquals(4, $matrix->get(2,2));
    }
}