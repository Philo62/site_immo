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
use Symfony\Component\Form\Extension\Core\Type\FileType;



class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Appartement' => 'Appartement',
                    'Maison' => 'Maison',
                    'Garage' => 'Garage',
                    'Terrain' => 'Terrain',
                    'Commerce' => 'Commerce',
                ]
            ])
            ->add('title')
            ->add('description')
            ->add('surface')
            ->add('rooms')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('heat', ChoiceType::class, [
                'choices' => $this->getChoises()
            ])
            ->add('options', EntityType::class,[
                'class' => Option::class,
                'required' => false,
                'choice_label' => 'name',
                'multiple' => true            
            ])
            ->add('imageFile', FileType::class, [
                'required' => false
            ])
            ->add('city')
            ->add('address')
            ->add('postal_code')
            ->add('seller', EntityType::class, [
                'class' => User::class,
                'required' => false,
                'choice_label' =>'username'
            ])
            ->add('sold')
            ->add('Name')
            ->add('LastName')
            ->add('BirthDate')
            ->add('BirthPlace')
            ->add('SecondName')
            ->add('SecondLastName')
            ->add('SecondBirthDate')
            ->add('SecondBirthPlace')
            ->add('MarriedDate')
            ->add('TelOne')
            ->add('MailOne')
            ->add('TelTwo')
            ->add('MailTwo')
            ->add('Procurations')
            ->add('AddressProperty')
            // ->add('PostalCode')
            ->add('Country')
            ->add('Cadastre')
            ->add('Notary')
            ->add('Exclusivity')
            ->add('TextPub')
            ->add('Dpe')
            ->add('Ges')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
            'translation_domain' => 'forms'
        ]);
    }

    private function getChoises()
    {
        $choices = Property::HEAT;
        $output = [];
        foreach($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output; 
    }
}
