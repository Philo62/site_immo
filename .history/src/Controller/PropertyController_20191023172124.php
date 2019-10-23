<?php
namespace App\Controller;

use App\Entity\Property;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
 {
    /**
     * @var Propertyrepo
     */
    private $repository;
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'current_menu' =>'properties'
        ]);
    }
 }