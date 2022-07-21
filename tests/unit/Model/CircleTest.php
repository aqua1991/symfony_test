<?php

namespace App\Tests\Model;

use App\Model\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testCircle()
    {
        $circle = new Circle(2);
        $this->assertSame(12.57, $circle->calc_surface());
        $this->assertSame(12.57, $circle->calc_circumference());
    }
}