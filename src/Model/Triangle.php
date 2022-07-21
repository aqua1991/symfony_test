<?php
namespace App\Model;

class Triangle {
	protected int $a;
    protected int $b;
    protected int $c;

    public function __construct(int $a = 0, int $b = 0, int $c = 0) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calc_surface() : float {
    	return number_format(sqrt(4*pow($this->a, 2)*pow($this->b, 2) - pow(pow($this->a, 2) + pow($this->b, 2) - pow($this->c, 2), 2)) / 4 , 2);
    }

    public function calc_circumference() : int {
    	return $this->a + $this->b + $this->c;
    }

}