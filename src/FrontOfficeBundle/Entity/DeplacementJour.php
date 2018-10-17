<?php

namespace FrontOfficeBundle\Entity;

/**
 * DeplacementJour
 */
class DeplacementJour
{
    /**
     * @var float|null
     */
    private $nbKm;

    /**
     * @var float|null
     */
    private $montant;

    /**
     * @var int|null
     */
    private $jour;

    /**
     * @var \DateTime|null
     */
    private $date;

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
     * @var \FrontOfficeBundle\Entity\Deplacement
     */
    private $deplacement;

    /**
     * @var \FrontOfficeBundle\Entity\TypeDeplacement
     */
    private $typeDeplacement;


    /**
     * Set nbKm.
     *
     * @param float|null $nbKm
     *
     * @return DeplacementJour
     */
    public function setNbKm($nbKm = null)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm.
     *
     * @return float|null
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set montant.
     *
     * @param float|null $montant
     *
     * @return DeplacementJour
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
     * Set jour.
     *
     * @param int|null $jour
     *
     * @return DeplacementJour
     */
    public function setJour($jour = null)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour.
     *
     * @return int|null
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set date.
     *
     * @param \DateTime|null $date
     *
     * @return DeplacementJour
     */
    public function setDate($date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set created.
     *
     * @param \DateTime|null $created
     *
     * @return DeplacementJour
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
     * @return DeplacementJour
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

    /**
     * Set deplacement.
     *
     * @param \FrontOfficeBundle\Entity\Deplacement|null $deplacement
     *
     * @return DeplacementJour
     */
    public function setDeplacement(\FrontOfficeBundle\Entity\Deplacement $deplacement = null)
    {
        $this->deplacement = $deplacement;

        return $this;
    }

    /**
     * Get deplacement.
     *
     * @return \FrontOfficeBundle\Entity\Deplacement|null
     */
    public function getDeplacement()
    {
        return $this->deplacement;
    }

    /**
     * Set typeDeplacement.
     *
     * @param \FrontOfficeBundle\Entity\TypeDeplacement|null $typeDeplacement
     *
     * @return DeplacementJour
     */
    public function setTypeDeplacement(\FrontOfficeBundle\Entity\TypeDeplacement $typeDeplacement = null)
    {
        $this->typeDeplacement = $typeDeplacement;

        return $this;
    }

    /**
     * Get typeDeplacement.
     *
     * @return \FrontOfficeBundle\Entity\TypeDeplacement|null
     */
    public function getTypeDeplacement()
    {
        return $this->typeDeplacement;
    }
}
