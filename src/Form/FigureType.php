<?php

namespace App\Form;

use App\Entity\Figure;
use Svg\Tag\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use App\Entity\User;
use App\Entity\Club;

class FigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('amount', NumberType::class, [
                'label' => 'Valeur',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Valeur',
                    ]])
            ->add('title', TextType::class, [
                'label' => 'Tire',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Titre',
                    ]])
            ->add('text', TextType::class, [
                'required' => false,
                'label' => 'Description',
                'attr' => [
                    'placeholder' => "Ecrivez ici",
                    ]])
          
            ->add('rank', ChoiceType::class, [
                'label' => 'Ordre d\'apparition',    
                'choices'  => [
                        'ne pas afficher' => null,
                        '1' => 1,
                        '2' => 2,
                        '3' => 3,
                        '4' => 4,
                        '5' => 5,
                        '6' => 6,
                        ],
                    ]);    
                    
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
