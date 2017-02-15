<?php

namespace PIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Otro
 *
 * @ORM\Table(name="otro")
 * @ORM\Entity(repositoryClass="PIGBundle\Repository\OtroRepository")
 */
class Otro
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

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Otro
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
     * @return Otro
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
