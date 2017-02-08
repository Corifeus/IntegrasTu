<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trabajadora
 *
 * @ORM\Table(name="trabajadora")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\TrabajadoraRepository")
 */
class Trabajadora
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 4,
     *      max = 100,
     *      minMessage = "Minimo 4 caracteres",
     *      maxMessage = "Maximo 32 caracteres"
     * )
     */
    private $direccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Alta", type="date")
     * @Assert\NotBlank()
     */
    private $fechaAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="Puesto", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $puesto;

    /**
     * @var int
     *
     * @ORM\Column(name="No_Cuenta_Banco", type="integer")
     * @Assert\NotBlank()
     */
    private $noCuentaBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="No_Seguridad_Social", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $noSeguridadSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="DNI", type="string", length=9, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 10,
     *      max = 10,
     *      minMessage = "Escribe un dni en formato xxxxxxxx-A",
     *      maxMessage = "Escribe un dni en formato xxxxxxxx-A"
     * )
     */
    private $dNI;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Nac", type="date")
     * @Assert\NotBlank()
     */
    private $fechaNac;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="integer", unique=true)
     * @Assert\NotBlank()
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $estado;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Trabajadora
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Trabajadora
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Trabajadora
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Trabajadora
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     *
     * @return Trabajadora
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set noCuentaBanco
     *
     * @param integer $noCuentaBanco
     *
     * @return Trabajadora
     */
    public function setNoCuentaBanco($noCuentaBanco)
    {
        $this->noCuentaBanco = $noCuentaBanco;

        return $this;
    }

    /**
     * Get noCuentaBanco
     *
     * @return int
     */
    public function getNoCuentaBanco()
    {
        return $this->noCuentaBanco;
    }

    /**
     * Set noSeguridadSocial
     *
     * @param string $noSeguridadSocial
     *
     * @return Trabajadora
     */
    public function setNoSeguridadSocial($noSeguridadSocial)
    {
        $this->noSeguridadSocial = $noSeguridadSocial;

        return $this;
    }

    /**
     * Get noSeguridadSocial
     *
     * @return string
     */
    public function getNoSeguridadSocial()
    {
        return $this->noSeguridadSocial;
    }

    /**
     * Set dNI
     *
     * @param string $dNI
     *
     * @return Trabajadora
     */
    public function setDNI($dNI)
    {
        $this->dNI = $dNI;

        return $this;
    }

    /**
     * Get dNI
     *
     * @return string
     */
    public function getDNI()
    {
        return $this->dNI;
    }

    /**
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     *
     * @return Trabajadora
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Trabajadora
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Trabajadora
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
}
