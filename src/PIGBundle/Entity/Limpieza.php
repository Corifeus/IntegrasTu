<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Limpieza
 *
 * @ORM\Table(name="limpieza")
  * @ORM\Entity(repositoryClass="MyApp\PIGBundle\Repository\LimpiezaRepository")
  */
class Limpieza extends Servicio
{


    /**
     * @var array
     *
     * @ORM\Column(name="productos", type="array")
     */
    private $productos;

    /**
     * @var string
     *
     * @ORM\Column(name="especificaciones", type="string", length=255)
     */
    private $especificaciones;



  
    /**
     * Set productos
     *
     * @param array $productos
     *
     * @return Limpieza
     */
    public function setProductos($productos)
    {
        $this->productos = $productos;

        return $this;
    }

    /**
     * Get productos
     *
     * @return array
     */
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * Set especificaciones
     *
     * @param string $especificaciones
     *
     * @return Limpieza
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
