<?php

namespace App\Form;

use App\Entity\Article;
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

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Titre de l\'article',
                    ]])
            ->add('website_link', TextType::class, [
                'label' => 'Lien',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Lien vers le site internet',
                    ]])
            ->add('author', TextType::class, [
                'required' => true,
                'label' => 'Auteur',
                'attr' => [
                    'placeholder' => "Auteur de l\'article",
                    ]])
            ->add('website', TextType::class, [
                'required' => true,
                'label' => 'Site internet',
                'attr' => [
                    'placeholder' => "Nom du site internet",
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
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}