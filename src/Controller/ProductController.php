<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Form\ProductType;

// Création d'un nouveau formulaire plus complet //

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */

    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $form= $this->createForm(ProductType::class, $product);

        

        return $this->render('product/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
