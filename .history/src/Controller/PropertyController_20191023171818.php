<?php
namespace App\Controller;

use App\Entity\Property;
use phpDocumentor\Reflection\Types\This;
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
        This
        return $this->render('property/index.html.twig', [
            'current_menu' =>'properties'
        ]);
    }
 }