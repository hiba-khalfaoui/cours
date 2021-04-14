<?php

namespace App\Form;

use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
           
            ->add('formationId',ChoiceType::class, [
                'choices'  => [
                    'PHP' => 4,
                    'JAVA' => 2,
                    'SQL' => 1,
                    'SYMFONY' => 6,
                    'CODENAME' => 5 ,
                    'JQUERY' => 7,
                    'JEE' => 11,
                    'JAVASCRIPT' => 3,
                ],
            ])
            ->add ('fichier', FileType::class, [
                'label' => "Importer le cours",
                'attr' => [
                    'accept' =>    'application/pdf',
                    'application/x-pdf'
                ],
                'data_class' => null,
                'required' => true
            ]
        )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
