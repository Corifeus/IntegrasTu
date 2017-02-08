<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CIF", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $cIF;

    /**
     * @var string
     *
     * @ORM\Column(name="Domicilio_Fiscal", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 4,
     *      max = 100,
     *      minMessage = "Minimo 4",
     *      maxMessage = "Maximo 100"
     * )
     */
    private $domicilioFiscal;

    /**
     * @var int
     *
     * @ORM\Column(name="CP", type="integer")
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 5,
     *      max = 5,
     *      minMessage = "Minimo 5 cifras",
     *      maxMessage = "Maximo 5 cifras"
     * )
     */
    private $cP;

    /**
     * @var string
     *
     * @ORM\Column(name="Municipio", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="No_Cuenta_Bancaria", type="integer")
     * @Assert\NotBlank()
     */
    private $noCuentaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="Persona_Contacto", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $personaContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono_Contacto", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $telefonoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="TelefonoMovil_Contacto", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $telefonoMovilContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Razon_Social", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $razonSocial;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cIF
     *
     * @param string $cIF
     *
     * @return Cliente
     */
    public function setCIF($cIF)
    {
        $this->cIF = $cIF;

        return $this;
    }

    /**
     * Get cIF
     *
     * @return string
     */
    public function getCIF()
    {
        return $this->cIF;
    }

    /**
     * Set domicilioFiscal
     *
     * @param string $domicilioFiscal
     *
     * @return Cliente
     */
    public function setDomicilioFiscal($domicilioFiscal)
    {
        $this->domicilioFiscal = $domicilioFiscal;

        return $this;
    }

    /**
     * Get domicilioFiscal
     *
     * @return string
     */
    public function getDomicilioFiscal()
    {
        return $this->domicilioFiscal;
    }

    /**
     * Set cP
     *
     * @param integer $cP
     *
     * @return Cliente
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return int
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Cliente
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Cliente
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set noCuentaBancaria
     *
     * @param string $noCuentaBancaria
     *
     * @return Cliente
     */
    public function setNoCuentaBancaria($noCuentaBancaria)
    {
        $this->noCuentaBancaria = $noCuentaBancaria;

        return $this;
    }

    /**
     * Get noCuentaBancaria
     *
     * @return string
     */
    public function getNoCuentaBancaria()
    {
        return $this->noCuentaBancaria;
    }

    /**
     * Set personaContacto
     *
     * @param string $personaContacto
     *
     * @return Cliente
     */
    public function setPersonaContacto($personaContacto)
    {
        $this->personaContacto = $personaContacto;

        return $this;
    }

    /**
     * Get personaContacto
     *
     * @return string
     */
    public function getPersonaContacto()
    {
        return $this->personaContacto;
    }

    /**
     * Set telefonoContacto
     *
     * @param string $telefonoContacto
     *
     * @return Cliente
     */
    public function setTelefonoContacto($telefonoContacto)
    {
        $this->telefonoContacto = $telefonoContacto;

        return $this;
    }

    /**
     * Get telefonoContacto
     *
     * @return string
     */
    public function getTelefonoContacto()
    {
        return $this->telefonoContacto;
    }

    /**
     * Set telefonoMovilContacto
     *
     * @param string $telefonoMovilContacto
     *
     * @return Cliente
     */
    public function setTelefonoMovilContacto($telefonoMovilContacto)
    {
        $this->telefonoMovilContacto = $telefonoMovilContacto;

        return $this;
    }

    /**
     * Get telefonoMovilContacto
     *
     * @return string
     */
    public function getTelefonoMovilContacto()
    {
        return $this->telefonoMovilContacto;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return Cliente
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }
}
