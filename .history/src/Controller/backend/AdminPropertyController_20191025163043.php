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
    {
    public function inde(Type $var = null)
    
        # code...
    }
    }

}