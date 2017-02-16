<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\ServicioRepository")
 */
class Servicio
{


    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="servicio")
     * @ORM\JoinColumn(name="cliente", referencedColumnName="id")
     */

    private $cliente;

    /**
     * @var \Doctrine\Common\Collections\Collection|Servicio[]
     *
     * @ORM\ManyToMany(targetEntity="Trabajadora", mappedBy="Servicio")
     */
    protected $trabajadora;

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
     * @ORM\Column(name="Persona_contacto", type="string", length=255)
     */
    private $personaContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono_contacto", type="string", length=255)
     */
    private $telefonoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;

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
     * Set personaContacto
     *
     * @param string $personaContacto
     *
     * @return Servicio
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
     * @return Servicio
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Servicio
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Servicio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Servicio
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Servicio
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trabajadora = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Servicio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cliente
     *
     * @param \PIGBundle\Entity\Cliente $cliente
     *
     * @return Servicio
     */
    public function setCliente(\PIGBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \PIGBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Add trabajadora
     *
     * @param \PIGBundle\Entity\Trabajadora $trabajadora
     *
     * @return Servicio
     */
    public function addTrabajadora(\PIGBundle\Entity\Trabajadora $trabajadora)
    {
        $this->trabajadora[] = $trabajadora;

        return $this;
    }

    /**
     * Remove trabajadora
     *
     * @param \PIGBundle\Entity\Trabajadora $trabajadora
     */
    public function removeTrabajadora(\PIGBundle\Entity\Trabajadora $trabajadora)
    {
        $this->trabajadora->removeElement($trabajadora);
    }

    /**
     * Get trabajadora
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrabajadora()
    {
        return $this->trabajadora;
    }

    /**
     * Add servicio
     *
     * @param \PIGBundle\Entity\Trabajadora $servicio
     *
     * @return Servicio
     */
    public function addServicio(\PIGBundle\Entity\Trabajadora $servicio)
    {
        $this->servicio[] = $servicio;

        return $this;
    }

    /**
     * Remove servicio
     *
     * @param \PIGBundle\Entity\Trabajadora $servicio
     */
    public function removeServicio(\PIGBundle\Entity\Trabajadora $servicio)
    {
        $this->servicio->removeElement($servicio);
    }

    /**
     * Get servicio
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServicio()
    {
        return $this->servicio;
    }
}
