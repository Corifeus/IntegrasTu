<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mantenimiento
 *
 * @ORM\Table(name="mantenimiento")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\MantenimientoRepository")
 */
class Mantenimiento extends Servicio
{


    /**
     * @var array
     *
     * @ORM\Column(name="material", type="array")
     */
    private $material;

    /**
     * @var string
     *
     * @ORM\Column(name="especificaciones", type="string", length=255)
     */
    private $especificaciones;


    /**
     * Set material
     *
     * @param array $material
     *
     * @return Mantenimiento
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return array
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set especificaciones
     *
     * @param string $especificaciones
     *
     * @return Mantenimiento
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
