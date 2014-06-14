<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsPlaza
 *
 * @ORM\Table(name="ss_plaza", uniqueConstraints={@ORM\UniqueConstraint(name="ss_plaza_pk", columns={"id"})}, indexes={@ORM\Index(name="define_fk", columns={"id_periodo"}), @ORM\Index(name="tiene_fk", columns={"id_carrera"}), @ORM\Index(name="oferta_fk", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class SsPlaza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_plaza_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="aprobado_remunerado", type="integer", nullable=true)
     */
    private $aprobadoRemunerado;

    /**
     * @var integer
     *
     * @ORM\Column(name="aprobado_adhonorem", type="integer", nullable=true)
     */
    private $aprobadoAdhonorem;

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

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
     * Set aprobadoRemunerado
     *
     * @param integer $aprobadoRemunerado
     * @return SsPlaza
     */
    public function setAprobadoRemunerado($aprobadoRemunerado)
    {
        $this->aprobadoRemunerado = $aprobadoRemunerado;

        return $this;
    }

    /**
     * Get aprobadoRemunerado
     *
     * @return integer 
     */
    public function getAprobadoRemunerado()
    {
        return $this->aprobadoRemunerado;
    }

    /**
     * Set aprobadoAdhonorem
     *
     * @param integer $aprobadoAdhonorem
     * @return SsPlaza
     */
    public function setAprobadoAdhonorem($aprobadoAdhonorem)
    {
        $this->aprobadoAdhonorem = $aprobadoAdhonorem;

        return $this;
    }

    /**
     * Get aprobadoAdhonorem
     *
     * @return integer 
     */
    public function getAprobadoAdhonorem()
    {
        return $this->aprobadoAdhonorem;
    }

    /**
     * Set idPeriodo
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsPeriodo $idPeriodo
     * @return SsPlaza
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
     * Set idEstablecimiento
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return SsPlaza
     */
    public function setIdEstablecimiento(\minsalSIG\minsalSIGBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idCarrera
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsCarrera $idCarrera
     * @return SsPlaza
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
