<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FosUserUser
 *
 * @ORM\Table(name="fos_user_user", uniqueConstraints={@ORM\UniqueConstraint(name="fos_user_user_pk", columns={"id"})}, indexes={@ORM\Index(name="IDX_C560D761890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_C560D76190F1D76D", columns={"id_rol"})})
 * @ORM\Entity
 */
class FosUserUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fos_user_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \Empleado
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id_empleado")
     * })
     */
    private $idEmpleado;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id_rol")
     * })
     */
    private $idRol;



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
     * Set username
     *
     * @param string $username
     * @return FosUserUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return FosUserUser
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return FosUserUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set idEmpleado
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\Empleado $idEmpleado
     * @return FosUserUser
     */
    public function setIdEmpleado(\minsalSIG\minsalSIGBundle\Entity\Empleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\Empleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idRol
     *
     * @param \minsalSIG\minsalSIGBundle\Entity\Rol $idRol
     * @return FosUserUser
     */
    public function setIdRol(\minsalSIG\minsalSIGBundle\Entity\Rol $idRol = null)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \minsalSIG\minsalSIGBundle\Entity\Rol 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }
}
