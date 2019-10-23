<?php

namespace App\Controller;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;

class HomeController
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
     * @Route "/" name="home"
     * @Return Response
     */
    public function index(): Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}
