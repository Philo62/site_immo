<?php

namespace App\Form;

use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\Option;
use App\Entity\User;
use App\Entity\Owner;
use Symfony\Component\Form\Extension\Core\Type\FileType;



class OwnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          
            ->add('title')
            ->add('name', EntityType::class, [
                'class' => Owner::class,
                'required' => false,
                'choice_label' =>'name'
            ])
            ->add('email')
            ->add('address')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Owner::class,
            'translation_domain' => 'forms'
        ]);
    }
    // private function getChoises()
    // {
    //     $choices = Property::HEAT;
    //     $output = [];
    //     foreach($choices as $k => $v) {
    //         $output[$v] = $k;
    //     }
    //     return $output; 
    // }
}