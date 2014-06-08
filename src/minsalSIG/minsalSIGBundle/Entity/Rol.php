<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rol_id_rol_seq", allocationSize=1, initialValue=1)
     */
    private $idRol;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_rol", type="string", length=25, nullable=false)
     */
    private $nombreRol;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_rol", type="string", length=75, nullable=true)
     */
    private $descripcionRol;



    /**
     * Get idRol
     *
     * @return integer 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return Rol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string 
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set descripcionRol
     *
     * @param string $descripcionRol
     * @return Rol
     */
    public function setDescripcionRol($descripcionRol)
    {
        $this->descripcionRol = $descripcionRol;

        return $this;
    }

    /**
     * Get descripcionRol
     *
     * @return string 
     */
    public function getDescripcionRol()
    {
        return $this->descripcionRol;
    }
}
