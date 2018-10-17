<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDeplacement
 *
 * @ORM\Table(name="type_deplacement")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class TypeDeplacement
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="type_deplacement", type="string", length=45, nullable=true)
     * 
     */
    private $typeDeplacement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set typeDeplacement.
     *
     * @param string|null $typeDeplacement
     *
     * @return TypeDeplacement
     */
    public function setTypeDeplacement($typeDeplacement = null)
    {
        $this->typeDeplacement = $typeDeplacement;

        return $this;
    }

    /**
     * Get typeDeplacement.
     *
     * @return string|null
     */
    public function getTypeDeplacement()
    {
        return $this->typeDeplacement;
    }

    /**
     * Set montant.
     *
     * @param float|null $montant
     *
     * @return TypeDeplacement
     */
    public function setMontant($montant = null)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant.
     *
     * @return float|null
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set created.
     *
     * @param \DateTime|null $created
     *
     * @return TypeDeplacement
     */
    public function setCreated($created = null)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created.
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated.
     *
     * @param \DateTime|null $updated
     *
     * @return TypeDeplacement
     */
    public function setUpdated($updated = null)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->typeDeplacement;
    }

    /**
     * Triggered on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->created = new \DateTime("now");
    }

    /**
     * Triggered on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updated = new \DateTime("now");
    }
}
