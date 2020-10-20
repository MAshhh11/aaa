<?php

namespace App\Form;

use App\Entity\Formation;
use App\Entity\FormationUser;
use Doctrine\ORM\EntityRepository;
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


class UserFormationType extends AbstractType
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
            ->add('formation', EntityType::class, [
                'label' => 'Formation',
                'class' => Formation::class,
                'attr' => [
                    'class' => "form-control"
                ],
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.title', 'ASC');
                },
                'choice_label' => function ($item) {
                    return $item->getTitle();
                }
            ])
            ->add('is_current', CheckboxType::class, [
                'label' => 'Débuter la formation',


            ])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormationUser::class,
        ]);
    }
}