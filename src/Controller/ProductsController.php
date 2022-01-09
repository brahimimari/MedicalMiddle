<?php 

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class ProductsController
{
   /**
    * @Route("/products/AllProducts")
    */
    public function AllProducts(): Response
    {
        $person = array( 
            "name" => "Johny Carson", 
            "title" => "CTO"
        );
        $personJSON=json_encode($person);
        $response = new Response($personJSON);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}