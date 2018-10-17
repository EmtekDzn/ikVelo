<?php

namespace FrontOfficeBundle\Entity;

/**
 * TypeDeplacement
 */
class TypeDeplacement
{
    /**
     * @var string|null
     */
    private $typeDeplacement;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var \DateTime|null
     */
    private $updated;

    /**
     * @var int
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
}
