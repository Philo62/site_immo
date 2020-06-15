<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ->add('Address')
            ->add('PostalCode')
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
            'data_class' => Product::class,
            'translation_domain' => 'forms'
        ]);
    }
}
