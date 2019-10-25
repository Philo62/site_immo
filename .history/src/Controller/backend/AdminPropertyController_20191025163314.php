<?php
namespace App\Controller\Admin;

use App\Repository\PropertyRepository;
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
    
    public function index()
    {
        $properties = $this->repository->findAll();
        return $this->render('admin/property/index.html.twig', compact('properties'));
    }
}

