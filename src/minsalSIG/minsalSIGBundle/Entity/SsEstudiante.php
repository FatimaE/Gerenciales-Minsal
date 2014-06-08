<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsEstudiante
 *
 * @ORM\Table(name="ss_estudiante", indexes={@ORM\Index(name="estudia_fk", columns={"id_carrera_inst_form"}), @ORM\Index(name="pertenece_fk", columns={"id_categoria"}), @ORM\Index(name="asignado_fk", columns={"id_establecimiento"}), @ORM\Index(name="presenta_fk", columns={"id_solicitud_extra"})})
 * @ORM\Entity
 */
class SsEstudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_estudiante_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cum", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $cum;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_egreso", type="integer", nullable=true)
     */
    private $anioEgreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mejor_cum", type="boolean", nullable=true)
     */
    private $mejorCum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remunerado", type="boolean", nullable=true)
     */
    private $remunerado;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_prueba", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $notaPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_servicio_social", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $notaServicioSocial;

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
     * @var \SsCarreraInstForm
     *
     * @ORM\ManyToOne(targetEntity="SsCarreraInstForm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_carrera_inst_form", referencedColumnName="id")
     * })
     */
    private $idCarreraInstForm;

    /**
     * @var \SsCategoria
     *
     * @ORM\ManyToOne(targetEntity="SsCategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * })
     */
    private $idCategoria;

    /**
     * @var \SsSolicitudExtra
     *
     * @ORM\ManyToOne(targetEntity="SsSolicitudExtra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitud_extra", referencedColumnName="id")
     * })
     */
    private $idSolicitudExtra;



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
     * Set cum
     *
     * @param string $cum
     * @return SsEstudiante
     */
    public function setCum($cum)
    {
        $this->cum = $cum;

        return $this;
    }

    /**
     * Get cum
     *
     * @return string 
     */
    public function getCum()
    {
        return $this->cum;
    }

    /**
     * Set anioEgreso
     *
     * @param integer $anioEgreso
     * @return SsEstudiante
     */
    public function setAnioEgreso($anioEgreso)
    {
        $this->anioEgreso = $anioEgreso;

        return $this;
    }

    /**
     * Get anioEgreso
     *
     * @return integer 
     */
    public function getAnioEgreso()
    {
        return $this->anioEgreso;
    }

    /**
     * Set mejorCum
     *
     * @param boolean $mejorCum
     * @return SsEstudiante
     */
    public function setMejorCum($mejorCum)
    {
        $this->mejorCum = $mejorCum;

        return $this;
    }

    /**
     * Get mejorCum
     *
     * @return boolean 
     */
    public function getMejorCum()
    {
        return $this->mejorCum;
    }

    /**
     * Set remunerado
     *
     * @param boolean $remunerado
     * @return SsEstudiante
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
     * Set notaPrueba
     *
     * @param string $notaPrueba
     * @return SsEstudiante
     */
    public function setNotaPrueba($notaPrueba)
    {
        $this->notaPrueba = $notaPrueba;

        return $this;
    }

    /**
     * Get notaPrueba
     *
     * @return string 
     */
    public function getNotaPrueba()
    {
        return $this->notaPrueba;
    }

    /**
     * Set notaServicioSocial
     *
     * @param string $notaServicioSocial
     * @return SsEstudiante
     */
    public function setNotaServicioSocial($notaServicioSocial)
    {
        $this->notaServicioSocial = $notaServicioSocial;

        return $this;
    }

    /**
     * Get notaServicioSocial
     *
     * @return string 
     */
    public function getNotaServicioSocial()
    {
        return $this->notaServicioSocial;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return SsEstudiante
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
     * Set idCarreraInstForm
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsCarreraInstForm $idCarreraInstForm
     * @return SsEstudiante
     */
    public function setIdCarreraInstForm(\minsalSIG\minsalSIGBundle\Entity\SsCarreraInstForm $idCarreraInstForm = null)
    {
        $this->idCarreraInstForm = $idCarreraInstForm;

        return $this;
    }

    /**
     * Get idCarreraInstForm
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\SsCarreraInstForm 
     */
    public function getIdCarreraInstForm()
    {
        return $this->idCarreraInstForm;
    }

    /**
     * Set idCategoria
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsCategoria $idCategoria
     * @return SsEstudiante
     */
    public function setIdCategoria(\minsalSIG\minsalSIGBundle\Entity\SsCategoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\SsCategoria 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idSolicitudExtra
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\SsSolicitudExtra $idSolicitudExtra
     * @return SsEstudiante
     */
    public function setIdSolicitudExtra(\minsalSIG\minsalSIGBundle\Entity\SsSolicitudExtra $idSolicitudExtra = null)
    {
        $this->idSolicitudExtra = $idSolicitudExtra;

        return $this;
    }

    /**
     * Get idSolicitudExtra
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\SsSolicitudExtra 
     */
    public function getIdSolicitudExtra()
    {
        return $this->idSolicitudExtra;
    }
}
