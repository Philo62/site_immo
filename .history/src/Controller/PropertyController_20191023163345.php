<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
 {

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        $property = new Property();
        $property->setTitle('Mon premier bien');
        ->setPrice(200000)
        ->set
        return $this->render('property/index.html.twig', [
            'current_menu' =>'properties'
        ]);
    }
 }