<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsInstitucionFormadora
 *
 * @ORM\Table(name="ss_institucion_formadora", uniqueConstraints={@ORM\UniqueConstraint(name="ss_institucion_formadora_pk", columns={"id"})})
 * @ORM\Entity
 */
class SsInstitucionFormadora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_institucion_formadora_id_seq", allocationSize=1, initialValue=1)
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
     * @return SsInstitucionFormadora
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
     * Set habilitada
     *
     * @param boolean $habilitada
     * @return SsInstitucionFormadora
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
