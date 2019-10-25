<?php
namespace App\Controller\Admin;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPropertyController extends AbstractController

{
    /**
     * @var PropertyRepository
     */
    Private $repository;
    
    public function __construct(PropertyRepository $repository)
    {
            $this->repository = $repository;
    }
    
    /**
     * @Route("/admin", name="admin.property.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $properties = $this->repository->findAll();
        return $this->render('admin/property/index.html.twig', compact('properties'));
    }

    /**
     * @Route("admin/{id})", name="admin.property.edit")
     * @param Property $property
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(Property $property)
    {
        $form = $this->createForm(PropertyType::class, $property);
        $form->

        return $this->render('admin/property/edit.html.twig', [
            'property' => $property,
            'form' => $form->createView()

        ]);
    }
}

