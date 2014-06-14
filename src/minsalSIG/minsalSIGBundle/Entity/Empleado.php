<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado", indexes={@ORM\Index(name="IDX_D9D9BF52D56B1641", columns={"id_cargo"})})
 * @ORM\Entity
 */
class Empleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_empleado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empleado_id_empleado_seq", allocationSize=1, initialValue=1)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_nombre", type="string", length=15, nullable=false)
     */
    private $primerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=15, nullable=false)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email_institucional", type="string", length=50, nullable=false)
     */
    private $emailInstitucional;

    /**
     * @var \Cargo
     *
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo", referencedColumnName="id_cargo")
     * })
     */
    private $idCargo;



    /**
     * Get idEmpleado
     *
     * @return integer 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set primerNombre
     *
     * @param string $primerNombre
     * @return Empleado
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get primerNombre
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return Empleado
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set emailInstitucional
     *
     * @param string $emailInstitucional
     * @return Empleado
     */
    public function setEmailInstitucional($emailInstitucional)
    {
        $this->emailInstitucional = $emailInstitucional;

        return $this;
    }

    /**
     * Get emailInstitucional
     *
     * @return string 
     */
    public function getEmailInstitucional()
    {
        return $this->emailInstitucional;
    }

    /**
     * Set idCargo
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\Cargo $idCargo
     * @return Empleado
     */
    public function setIdCargo(\minsalSIG\minsalSIGBundle\Entity\Cargo $idCargo = null)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\Cargo 
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }
}
