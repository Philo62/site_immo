<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/// 
// class HomeController extends AbstractController 
// {
//     /**
//      * @Route ("/", name="home")
//      * @return Response
//      */
//     public function index(): Response
//     {
//         return $this->render('pages/home.html.twig');
//     }
// }
class HomeController{
 
    private $twig;
 
    public function __construct($twig)
    {
        $this->twig = $twig;
    }
 
    public function index(): Response{
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}