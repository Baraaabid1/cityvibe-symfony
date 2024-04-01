<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class AjoutReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titrer')
        ->add('contenu')
        ->add('typer', ChoiceType::class, [
            'choices' => [
                'Réclamation Urgente' => 'Réclamation Urgente',
                'Bugs ou plantages' => 'Bugs ou plantages',
                'Contenu inapproprié' => 'Contenu inapproprié',
                'Informations incorrectes' => 'Informations incorrectes',
                'Problèmes de sécurité' => 'Problèmes de sécurité',
                'Suggestions d amélioration' => 'Suggestions d amélioration',
                'Problèmes de service client' => 'Problèmes de service client',
            ],
            'required' => false,
            'placeholder' => 'Sélectionnez un Type', 
        ])
        ->add('apropo', ChoiceType::class, [
            'choices' => [
                'Page' => 'Page',
                'Evenement' => 'Evenement',
                'Autre' => 'Autre',
            ],
            'required' => false,
            'placeholder' => 'A propo quoi ', 
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
