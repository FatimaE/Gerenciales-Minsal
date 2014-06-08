<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsCarreraPeriodo
 *
 * @ORM\Table(name="ss_carrera_periodo", uniqueConstraints={@ORM\UniqueConstraint(name="ss_carrera_periodo_pk", columns={"id"})}, indexes={@ORM\Index(name="establece_fk", columns={"id_periodo"}), @ORM\Index(name="establece2_fk", columns={"id_carrera"})})
 * @ORM\Entity
 */
class SsCarreraPeriodo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_carrera_periodo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \SsPeriodo
     *
     * @ORM\ManyToOne(targetEntity="SsPeriodo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periodo", referencedColumnName="id")
     * })
     */
    private $idPeriodo;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idPeriodo
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsPeriodo $idPeriodo
     * @return SsCarreraPeriodo
     */
    public function setIdPeriodo(\minsalSIG\minsalSIGBundle\Entity\SsPeriodo $idPeriodo = null)
    {
        $this->idPeriodo = $idPeriodo;

        return $this;
    }

    /**
     * Get idPeriodo
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\SsPeriodo 
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * Set idCarrera
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsCarrera $idCarrera
     * @return SsCarreraPeriodo
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
}
