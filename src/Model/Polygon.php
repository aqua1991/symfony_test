<?php
namespace App\Model;

use App\Model\Circle;
use App\Model\Triangle;

class Polygon {
    public function calc_surface_sum(Triangle $triangle, Circle $circle) {
        return $triangle->calc_surface() + $circle->calc_surface();
    }
    public function calc_circumference_sum(Triangle $triangle, Circle $circle) {
        return $triangle->calc_circumference() + $circle->calc_circumference();
    }
}