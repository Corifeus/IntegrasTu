<?php

namespace PIGBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CIF',TextType::class)
            ->add('DomicilioFiscal',TextType::class)
            ->add('cP',IntegerType::class)
            ->add('Municipio',TextType::class)
            ->add('Provincia',TextType::class)
            ->add('NoCuentaBancaria',IntegerType::class)
            ->add('PersonaContacto',TextType::class)
            ->add('TelefonoContacto',TextType::class)
            ->add('TelefonoMovilContacto',TextType::class)
            ->add('RazonSocial',TextType::class)
            ->add('Salvar',SubmitType::class)
            ->add('Borrar',ResetType::class)        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIGBundle\Entity\Cliente'
        ));
    }
}
