<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargo
 *
 * @ORM\Table(name="cargo")
 * @ORM\Entity
 */
class Cargo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cargo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cargo_id_cargo_seq", allocationSize=1, initialValue=1)
     */
    private $idCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cargo", type="string", length=25, nullable=false)
     */
    private $nombreCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=75, nullable=true)
     */
    private $descripcion;



    /**
     * Get idCargo
     *
     * @return integer 
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set nombreCargo
     *
     * @param string $nombreCargo
     * @return Cargo
     */
    public function setNombreCargo($nombreCargo)
    {
        $this->nombreCargo = $nombreCargo;

        return $this;
    }

    /**
     * Get nombreCargo
     *
     * @return string 
     */
    public function getNombreCargo()
    {
        return $this->nombreCargo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Cargo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
