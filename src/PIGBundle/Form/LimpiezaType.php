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

class LimpiezaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('personaContacto', TextType::class)
        ->add('telefonoContacto' ,TextType::class)
        ->add('direccion' ,TextType::class)
        ->add('fecha' ,DateType::class)
        ->add('observaciones' ,TextType::class)
        ->add('productos',TextType::class)
        ->add('especificaciones',TextType::class)
        ->add('Salvar',SubmitType::class)
        ->add('Borrar',ResetType::class)         ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIGBundle\Entity\Limpieza'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pigbundle_limpieza';
    }


}
