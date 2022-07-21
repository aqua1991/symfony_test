<?php

namespace App\Tests\Model;

use App\Model\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    public function testTriangle()
    {
        $triangle = new Triangle(5, 4, 3);
        $this->assertSame(6.0, $triangle->calc_surface());
        $this->assertSame(12, $triangle->calc_circumference());
    }
}