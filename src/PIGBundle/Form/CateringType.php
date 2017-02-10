<?php

namespace PIGBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CateringType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('horaLlegada', TextType::class)
        ->add('horaInicio',TextType::class)
        ->add('horaFin',TextType::class)
        ->add('tipo' ,TextType::class)
        ->add('noComensales' ,IntegerType::class)
        ->add('observComensales' ,TextType::class)
        ->add('observMenu' ,TextType::class)
        ->add('especificaciones' ,TextType::class)
        ->add('Salvar',SubmitType::class)
        ->add('Borrar',ResetType::class)          ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIGBundle\Entity\Catering'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pigbundle_catering';
    }


}
