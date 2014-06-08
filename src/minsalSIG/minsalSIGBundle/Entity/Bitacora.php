<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacora
 *
 * @ORM\Table(name="bitacora")
 * @ORM\Entity
 */
class Bitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bitacora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bitacora_id_bitacora_seq", allocationSize=1, initialValue=1)
     */
    private $idBitacora;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario", type="integer", nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="tabla", type="string", length=50, nullable=false)
     */
    private $tabla;

    /**
     * @var string
     *
     * @ORM\Column(name="operacion", type="string", length=50, nullable=false)
     */
    private $operacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;



    /**
     * Get idBitacora
     *
     * @return integer 
     */
    public function getIdBitacora()
    {
        return $this->idBitacora;
    }

    /**
     * Set usuario
     *
     * @param integer $usuario
     * @return Bitacora
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return integer 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set tabla
     *
     * @param string $tabla
     * @return Bitacora
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get tabla
     *
     * @return string 
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set operacion
     *
     * @param string $operacion
     * @return Bitacora
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return string 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Bitacora
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
