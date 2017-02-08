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

class TrabajadoraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class)
            ->add('apellidos',TextType::class)
            ->add('direccion',TextType::class)
            ->add('fechaAlta',DateType::class,array(
              'years' => range(1900,2100)
            ))
            ->add('puesto',TextType::class)
            ->add('noCuentaBanco',IntegerType::class)
            ->add('noSeguridadSocial',TextType::class)
            ->add('dNI',TextType::class)
            ->add('fechaNac',DateType::class,array(
              'years' => range(1900,2100)
            ))
            ->add('telefono',IntegerType::class)
            ->add('estado',TextType::class)
            ->add('Salvar',SubmitType::class)
            ->add('Borrar',ResetType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIGBundle\Entity\Trabajadora'
        ));
    }
}
