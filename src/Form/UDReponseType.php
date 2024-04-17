<?php

namespace App\Form;

use App\Entity\Reponser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UDReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('modification', TextType::class, [
            'label' => 'Modification'
        ])
        ->add('modify', SubmitType::class, [
            'label' => 'Modify'
        ])
        ->add('delete', SubmitType::class, [
            'label' => 'Delete'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponser::class,
        ]);
    }
}
