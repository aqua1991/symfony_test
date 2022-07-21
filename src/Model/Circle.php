<?php
namespace App\Model;

class Circle {
	protected int $radius;

    public function __construct(int $radius = 0) {
        $this->radius = $radius;
    }

    public function calc_surface() : float {
    	return number_format(M_PI * $this->radius * $this->radius, 2);
    }

    public function calc_circumference() : float {
    	return number_format(M_PI * $this->radius * 2, 2);
    }

}