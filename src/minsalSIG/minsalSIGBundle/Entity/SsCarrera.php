<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsCarrera
 *
 * @ORM\Table(name="ss_carrera", uniqueConstraints={@ORM\UniqueConstraint(name="ss_carrera_pk", columns={"id"})})
 * @ORM\Entity
 */
class SsCarrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_carrera_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remunerado", type="boolean", nullable=true)
     */
    private $remunerado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitada", type="boolean", nullable=true)
     */
    private $habilitada;



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
     * Set nombre
     *
     * @param string $nombre
     * @return SsCarrera
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
     * Set remunerado
     *
     * @param boolean $remunerado
     * @return SsCarrera
     */
    public function setRemunerado($remunerado)
    {
        $this->remunerado = $remunerado;

        return $this;
    }

    /**
     * Get remunerado
     *
     * @return boolean 
     */
    public function getRemunerado()
    {
        return $this->remunerado;
    }

    /**
     * Set habilitada
     *
     * @param boolean $habilitada
     * @return SsCarrera
     */
    public function setHabilitada($habilitada)
    {
        $this->habilitada = $habilitada;

        return $this;
    }

    /**
     * Get habilitada
     *
     * @return boolean 
     */
    public function getHabilitada()
    {
        return $this->habilitada;
    }
}
