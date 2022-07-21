<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Circle;

class CircleController
{
	/**
    * @Route("/circle/{radius}")
    */
    public function show(int $radius): Response
    {
        $circle = new Circle($radius);
        $result = array (
            "type"=> "circle",
             "radius"=> $radius,
             "surface"=> $circle->calc_surface(),
             "circumference"=> $circle->calc_circumference(),
        );
        return new Response(
            json_encode($result)
        );
    }
}
?>