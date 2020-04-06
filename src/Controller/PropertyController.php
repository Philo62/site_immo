<?php
namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Property;
use App\Form\ContactType;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Form\PropertyType;
use App\Notification\ContactNotific;
use App\Notification\ContactNotification;
use App\Repository\PropertyRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
 {
    /**
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository; 
        $this->em = $em;   
    }
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
     public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $search = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);
        // Gérer les traitement dans le controller

        $properties = $paginator->paginate(
            $this->repository->FindAllVisibleQuery($search),
            $request->query->getInt('page', 1), 12
        );
        return $this->render('property/index.html.twig', [
            'current_menu' =>'properties',
            'properties' => $properties,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Property $property
     * @return Response
     */
    public function show(Property $property,string $slug, Request $request, ContactNotification $notification): Response 
    {
        if ($property->getSlug() !== $slug) {
            return $this->redirectToRoute('property.show', [
            'id'    => $property->getId(),
            'slug'  => $property->getSlug()
        ],301);
    }

    $contact= new Contact();
    $contact->setProperty($property);
    $form = $this->createForm(ContactType::class, $contact);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $notification->notify($contact);
        $this->addFlash('success', 'Votre message a bien été envoyé');
    
        return $this->redirectToRoute('property.show', [
            'id'    => $property->getId(),
            'slug'  => $property->getSlug()
        ]);
    
    }
   
    return $this->render('property/show.html.twig', [
        'property'      => $property,
        'current_menu'  => 'properties',
        'form'          => $form->createView()
    ]);
    }
 }