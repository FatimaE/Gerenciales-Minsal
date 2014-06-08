<?php

namespace minsalSIG\minsalSIGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SsCategoria
 *
 * @ORM\Table(name="ss_categoria", uniqueConstraints={@ORM\UniqueConstraint(name="ss_categoria_pk", columns={"id"})})
 * @ORM\Entity
 */
class SsCategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ss_categoria_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=20, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="limite_inferior", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $limiteInferior;

    /**
     * @var string
     *
     * @ORM\Column(name="limite_superior", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $limiteSuperior;



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
     * @return SsCategoria
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
     * Set limiteInferior
     *
     * @param string $limiteInferior
     * @return SsCategoria
     */
    public function setLimiteInferior($limiteInferior)
    {
        $this->limiteInferior = $limiteInferior;

        return $this;
    }

    /**
     * Get limiteInferior
     *
     * @return string 
     */
    public function getLimiteInferior()
    {
        return $this->limiteInferior;
    }

    /**
     * Set limiteSuperior
     *
     * @param string $limiteSuperior
     * @return SsCategoria
     */
    public function setLimiteSuperior($limiteSuperior)
    {
        $this->limiteSuperior = $limiteSuperior;

        return $this;
    }

    /**
     * Get limiteSuperior
     *
     * @return string 
     */
    public function getLimiteSuperior()
    {
        return $this->limiteSuperior;
    }
}
