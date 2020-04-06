<?php

namespace App\Controller;

use App\Entity\Owner;
use App\Form\OwnerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OwnerController extends AbstractController
{
    /**
     * 
     * @Route("/admin/owner", name="owner")
     */
    public function index(Request $request)
    {
        $owner = new Owner();
        $form = $this->createForm(OwnerType::class, $owner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($owner);
            $em->flush();

            return $this->redirectToRoute('admin');
        }

        return $this->render(
            'admin/owner/index.html.twig',
            array('form' => $form->createView())

        );
    }
}
