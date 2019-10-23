<?php

namespace App\Controller;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/// à partir d'ici c'est censé être le code sans " Construct " mais Extends AbstractController ... ///
// Moi ça met l'erreur " Class has no contruct.. "  

// class HomeController extends AbstractController 
// {
    /**
     * @Route ("/", name="home")
     * @return Response
     */
//     public function index(): Response
//     {
//         return $this->render('pages/home.html.twig');
//     }
// }

// et là dessous je redéfinis le constructor, comme par magie ça fonctionne.. je ne sais pas me servir d'AbstractController ...  

class HomeController extends AbstractController
{
 
    // private $twig;
 
    // public function __construct($twig)
    // {
    //     $this->twig = $twig;
    // }
 // Fin du constructeur obligatoire Abstract fonctionne pas .. search ? ////////
    
    public function index(PropertyRepository $repo): Response
    {
        
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}