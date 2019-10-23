<?php

namespace App\Controller;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Abstra
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route ("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}
