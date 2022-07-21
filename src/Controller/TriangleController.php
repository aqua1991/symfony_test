<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Triangle;

class TriangleController
{
	/**
    * @Route("/triangle/{a}/{b}/{c}")
    */
    public function show(int $a, int $b, int $c): Response
    {
    
    	$triangle = new Triangle($a, $b, $c);
    	$result = array (
    		"type"=> "triangle",
			 "a"=> $a,
			 "b"=> $b,
			 "c"=> $c,
			 "surface"=> $triangle->calc_surface(),
			 "circumference"=> $triangle->calc_circumference(),
    	);
        return new Response(
            json_encode($result)
        );
    }
}
?>