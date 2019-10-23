<?php

namespace App\Repository;

use App\Entity\Property;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }

    public function FindAllVisible()
    {
        return $this->createQueryBuilder('p')
        ->where('p.sold = false')
        ->getQuery()

        $property = new Property();
        $property->setTitle('Mon premier bien')
        ->setPrice(200000)
        ->setRooms(4)
        ->setBedrooms(3)
        ->setDescription('Une petite maison')
        ->setSurface(70)
        ->setFloor(4)
        ->setHeat(1)
        ->setCity('Montpellier')
        ->setAddress('15 boulevard Gambetta')
        ->setPostalCode('34000');
    $em = $this->getDoctrine()->getManager();
    $em->persist($property);
    $em->flush();
    }
    // /**
    //  * @return Property[] Returns an array of Property objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Property
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
