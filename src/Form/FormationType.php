<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;


use App\Entity\Exercice;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['data']->getIsActive() === null) {
            $checked = true;
        } else {
            $checked = $options['data']->getIsActive();
        }


        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Le titre de la formation',
                    ]])
//            ->add('description', TextareaType::class, [
//                'label' => 'Description',
//                'required' => false,
//                'attr' => [
//                    'placeholder' => 'Description de la formation',
//                ]])
            ->add('duration', TextType::class, [
                'label' => 'Durée',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Durée de la formation en heures',
                    ]])
            ->add('price', MoneyType::class, [
                'label' => 'Prix',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Prix de la formation',
                ]])
            ->add('isActive', CheckboxType::class, [
                'required' => false,
                'label' => 'Activer la formation',
                'label_attr' => ['class' => 'custom-control-label'],
                'data' => $checked,
                'attr' =>[
                    'class' => 'custom-control-input']])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}