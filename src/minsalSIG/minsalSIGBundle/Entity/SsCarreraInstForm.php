<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsCarreraInstForm
 *
 * @ORM\Table(name="ss_carrera_inst_form", uniqueConstraints={@ORM\UniqueConstraint(name="ss_carrera_inst_form_pk", columns={"id"})}, indexes={@ORM\Index(name="imparte_fk", columns={"id_carrera"}), @ORM\Index(name="imparte2_fk", columns={"id_institucion_formadora"})})
 * @ORM\Entity
 */
class SsCarreraInstForm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_carrera_inst_form_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \SsCarrera
     *
     * @ORM\ManyToOne(targetEntity="SsCarrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_carrera", referencedColumnName="id")
     * })
     */
    private $idCarrera;

    /**
     * @var \SsInstitucionFormadora
     *
     * @ORM\ManyToOne(targetEntity="SsInstitucionFormadora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_institucion_formadora", referencedColumnName="id")
     * })
     */
    private $idInstitucionFormadora;



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
     * Set idCarrera
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsCarrera $idCarrera
     * @return SsCarreraInstForm
     */
    public function setIdCarrera(\minsalSIG\minsalSIGBundle\Entity\SsCarrera $idCarrera = null)
    {
        $this->idCarrera = $idCarrera;

        return $this;
    }

    /**
     * Get idCarrera
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\SsCarrera 
     */
    public function getIdCarrera()
    {
        return $this->idCarrera;
    }

    /**
     * Set idInstitucionFormadora
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsInstitucionFormadora $idInstitucionFormadora
     * @return SsCarreraInstForm
     */
    public function setIdInstitucionFormadora(\minsalSIG\minsalSIGBundle\Entity\SsInstitucionFormadora $idInstitucionFormadora = null)
    {
        $this->idInstitucionFormadora = $idInstitucionFormadora;

        return $this;
    }

    /**
     * Get idInstitucionFormadora
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\SsInstitucionFormadora 
     */
    public function getIdInstitucionFormadora()
    {
        return $this->idInstitucionFormadora;
    }
}
