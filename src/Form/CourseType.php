<?php

namespace App\Form;

use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;


use App\Entity\Exercice;

class CourseType extends AbstractType
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
                    'placeholder' => 'Le titre du cours',
                    ]])
//            ->add('description', TextareaType::class, [
//                'label' => 'Description',
//                'required' => false,
//                'attr' => [
//                    'placeholder' => 'Une description du cours',
//                    ]])
            ->add('duration', Texttype::class, [
                'label' => 'Durée',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Durée du cours',
                ]])
//            ->add('isActive', CheckboxType::class, [
//                'required' => false,
//                'label' => 'Activer le cours ',
//                'label_attr' => ['class' => 'custom-control-label'],
//                'data' => $checked,
//                'attr' =>[
//                    'class' => 'custom-control-input']])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}