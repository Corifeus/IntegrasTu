<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Otro
 *
 * @ORM\Table(name="otro")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\OtroRepository")
 */
class Otro extends Servicio
{

    /**
     * @var string
     *
     * @ORM\Column(name="Especificaciones", type="string", length=255)
     */
    private $especificaciones;


    /**
     * Set especificaciones
     *
     * @param string $especificaciones
     *
     * @return Otro
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
