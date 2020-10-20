<?php

namespace App\Form;

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

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Nom', 
                'attr' => [
                    'placeholder' => 'Le nom du membre',
                    ]])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom', 
                'attr' => [
                    'placeholder' => 'Le prénom du membre',
                    ]])
            ->add('email', EmailType::class, [
                'required' => false,
                'label' => 'Adresse e-mail', 
                'attr' => [
                    'placeholder' => "exemple@societe.com",
                    ]])
            ->add('phone', TextType::class, [
                'required' => false,
                'label' => 'Téléphone',
                'attr' => [
                    'placeholder' => "05 05 05 05 05",
                ]])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => false,
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