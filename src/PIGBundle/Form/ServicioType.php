<?php

namespace PIGBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use PIGBundle\Entity\Trabajadora;
use PIGBundle\Entity\Cliente;

class ServicioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('personaContacto', TextType::class)
        ->add('telefonoContacto' ,TextType::class)
        ->add('direccion' ,TextType::class)
        ->add('fecha' ,DateTimeType::class)
        ->add('observaciones' ,TextareaType::class)
        ->add('estado' ,TextType::class)
        ->add('tipo', ChoiceType::class, array(
                'choices'  => array(
                    'Limpieza' => 'Limpieza',
                    'Catering' => 'Catering',
                    'Mantenimiento' => 'Mantenimiento',
                    'Otro' => 'Otro',
                ), ))
        ->add('cliente', EntityType::class, array(
              'class' => 'PIGBundle:Cliente',
              'choice_label' => 'id',))
        ->add('Salvar',SubmitType::class)
        ->add('Borrar',ResetType::class)         ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIGBundle\Entity\Servicio'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pigbundle_servicio';
    }


}
