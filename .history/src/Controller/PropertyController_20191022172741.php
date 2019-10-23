<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\PropertyController;

class PropertyController
 {

    /**
     * @Route(/biens, name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        return new Response('Les biens');
    }
 }