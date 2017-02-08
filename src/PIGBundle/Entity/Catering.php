<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catering
 *
 * @ORM\Table(name="catering")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\CateringRepository")
 */
class Catering extends Servicio
{

    /**
     * @var string
     *
     * @ORM\Column(name="horaLlegada", type="string", length=255)
     */
    private $horaLlegada;

    /**
     * @var string
     *
     * @ORM\Column(name="horaInicio", type="string", length=255)
     */
    private $horaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="horaFin", type="string", length=255)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="noComensales", type="integer")
     */
    private $noComensales;

    /**
     * @var string
     *
     * @ORM\Column(name="observComensales", type="string", length=255)
     */
    private $observComensales;

    /**
     * @var string
     *
     * @ORM\Column(name="observMenu", type="string", length=255)
     */
    private $observMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="especificaciones", type="string", length=255)
     */
    private $especificaciones;


    /**
     * Get id
     *
     * @return integer
     */
  
    public function setHoraLlegada($horaLlegada)
    {
        $this->horaLlegada = $horaLlegada;

        return $this;
    }

    /**
     * Get horaLlegada
     *
     * @return string
     */
    public function getHoraLlegada()
    {
        return $this->horaLlegada;
    }

    /**
     * Set horaInicio
     *
     * @param string $horaInicio
     *
     * @return Catering
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return string
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param string $horaFin
     *
     * @return Catering
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return string
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Catering
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
     * Set noComensales
     *
     * @param integer $noComensales
     *
     * @return Catering
     */
    public function setNoComensales($noComensales)
    {
        $this->noComensales = $noComensales;

        return $this;
    }

    /**
     * Get noComensales
     *
     * @return integer
     */
    public function getNoComensales()
    {
        return $this->noComensales;
    }

    /**
     * Set observComensales
     *
     * @param string $observComensales
     *
     * @return Catering
     */
    public function setObservComensales($observComensales)
    {
        $this->observComensales = $observComensales;

        return $this;
    }

    /**
     * Get observComensales
     *
     * @return string
     */
    public function getObservComensales()
    {
        return $this->observComensales;
    }

    /**
     * Set observMenu
     *
     * @param string $observMenu
     *
     * @return Catering
     */
    public function setObservMenu($observMenu)
    {
        $this->observMenu = $observMenu;

        return $this;
    }

    /**
     * Get observMenu
     *
     * @return string
     */
    public function getObservMenu()
    {
        return $this->observMenu;
    }

    /**
     * Set especificaciones
     *
     * @param string $especificaciones
     *
     * @return Catering
     */
    public function setEspecificaciones($especificaciones)
    {
        $this->especificaciones = $especificaciones;

        return $this;
    }

    /**
     * Get especificaciones
     *
     * @return string
     */
    public function getEspecificaciones()
    {
        return $this->especificaciones;
    }
}
