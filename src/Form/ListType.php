<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class, [
            'required' => true,
            'attr' => [
                'placeholder' => "exemple@exemple.com",
                ]])
        ->add('firstname', TextType::class, [
            'required' => true,
            'attr' => [
                'placeholder' => "Prénom",
                'class' => 'listInput',
                ]])
        ->add('lastname', TextType::class, [
            'required' => true,
            'attr' => [
                'placeholder' => "Nom",
                'class' => 'listInput',
                ]])
        ->add('hiddenList', HiddenType::class, [])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
