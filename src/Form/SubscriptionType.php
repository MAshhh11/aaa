<?php

namespace App\Form;

use App\Entity\RgpdOptin;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;


use App\Entity\User;
use App\Entity\Club;

class SubscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        if ($options['data']->getIsActive() === null) {
//            $checked = true;
//        } else {
//            $checked = $options['data']->getIsActive();
//        }
//        if ($options['data']->getId() === null) {
//            $sendChecked = true;
//        } else {
//            $sendChecked = false;
//        }
        
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'empty_data' => null,
                'required' => true,
                ])
            ->add('email', EmailType::class, [
                'required' => true,
                'empty_data' => null,
                'label' => 'Adresse e-mail', 
               ])
            ->add('phone', TextType::class, [
                'required' => false,
                'label' => 'Téléphone',
               ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'empty_data' => null,
                'mapped' => false,
                'invalid_message' => 'Les deux mots de passe sont différents',
                'options' => ['attr' => ['class' => 'password-field']],
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confirmation du mot de passe']
            ])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}