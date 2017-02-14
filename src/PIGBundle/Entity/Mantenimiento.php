<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mantenimiento
 *
 * @ORM\Table(name="mantenimiento")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\MantenimientoRepository")
 */
class Mantenimiento
{

  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;

  /**
   * @var int
   *
   * @ORM\Column(name="id_servicio", type="integer")
   */
  private $id_servicio;

  /**
   * @var string
   *
   * @ORM\Column(name="material", type="string", length=255)
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
     * @param string $material
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
     * @return string
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

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Mantenimiento
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idServicio
     *
     * @param integer $idServicio
     *
     * @return Mantenimiento
     */
    public function setIdServicio($idServicio)
    {
        $this->id_servicio = $idServicio;

        return $this;
    }

    /**
     * Get idServicio
     *
     * @return integer
     */
    public function getIdServicio()
    {
        return $this->id_servicio;
    }
}
