<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\File;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('lastname', TextType::class, [
            'required' => true,
            'label' => 'Nom',
            'attr' => [
                ]])
        ->add('firstname', TextType::class, [
            'required' => true,
            'label' => 'Prénom',
            'attr' => [
                ]])
        ->add('email', EmailType::class, [
            'required' => true,
            'label' => 'E-mail',
            'attr' => [
                ]])
        ->add('select', ChoiceType::class, [
            'required' => true,
            'placeholder' => 'Merci de sélectionner le motif de votre message',
            'choices'  => [
                'Une question sur les formations' => 'formation',
                'Envoi de mon exercice gratuit' => 'exercice',
                ]])
        ->add('message', TextareaType::class, [
            'required' => true,
            'label' => 'Message',
            'attr' => [
              'rows' => '6',
                ]])
        ->add('video', FileType::class, [
          'required' => false,
          'constraints' => [
                    new File([
                        'maxSize' => '20000k',
                        'mimeTypes' => [
                            'video/webm',
                            'video/ogg',
                            'video/mpeg',
                            'video/x-msvideo',
                            'image/gif'
                        ],
                        'mimeTypesMessage' => 'Utilisé un des formats suivant webm, ogg, mp4, avi, gif',
                    ])
                ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
