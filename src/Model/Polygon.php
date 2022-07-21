<?php
namespace App\Model;

abstract class Polygon {
    // This is abstract function
    abstract function calc_surface();
    abstract function calc_circumference();
}