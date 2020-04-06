<?php

namespace App\Form;

use App\Entity\Option;
use App\Entity\Property;
use App\Entity\PropertySearch;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Choice;

class PropertySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minSurface', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Surface min'
                ]
            ])
            ->add('maxPrice', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Budget max'
                ]
            ])
            ->add('options', EntityType::class, [
                'required' => false,
                'label' => false,
                'class' => Option::class,
                'choice_label' => 'name',
                'multiple' => true,
                
            ])
            ->add('city', EntityType::class, [
                'required' => false,
                'label' => false,
                'class' => Property::class,
                'choice_label' => 'city',  
            ])

            // tentative de tri par type de biens //

            ->add('type', ChoiceType::class, [
                'required' => false,
                'label' => false,
                'choices' => [
                    'Appartement' => 'Appartement',
                    'Maison' => 'Maison',
                    'Garage' => 'Garage',
                    'Bureau' => 'Bureau',
                    'Château' => 'Château',
                    'Commerce' => 'Commerce',
                    
                ]
                // 'multiple' => 'true'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PropertySearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
