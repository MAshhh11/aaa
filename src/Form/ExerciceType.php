<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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


use App\Entity\Exercice;

class ExerciceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        if ($options['data']->getIsActive() === null) {
//            $checked = true;
//        } else {
//            $checked = $options['data']->getIsActive();
//        }

        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'placeholder' => 'Le titre de l\'exercice',
                    ]])
//            ->add('description', TextareaType::class, [
//                'label' => 'Description',
//                'required' => false,
//                'attr' => [
//                    'placeholder' => 'Une description de l\exercice',
//                    ]])
            ->add('difficulty', IntegerType::class, [
                'label' => 'Difficulté',
                'required' => false,
                'attr' => [
                    'min' => 1,
                    'max' => 5
                ]
                ])
//            ->add('isActive', CheckboxType::class, [
//                'required' => false,
//                'label' => 'Activer L\'exercice ',
//                'label_attr' => ['class' => 'custom-control-label'],
//                'data' => $checked,
//                'attr' =>[
//                    'class' => 'custom-control-input']])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Exercice::class,
        ]);
    }
}