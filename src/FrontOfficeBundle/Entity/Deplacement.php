<?php

namespace FrontOfficeBundle\Entity;

/**
 * Deplacement
 */
class Deplacement
{
    /**
     * @var int|null
     */
    private $annee;

    /**
     * @var int|null
     */
    private $mois;

    /**
     * @var \DateTime|null
     */
    private $dateValidation;

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var \DateTime|null
     */
    private $updated;

    /**
     * @var bool|null
     */
    private $validation;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \FrontOfficeBundle\Entity\User
     */
    private $user;

    /**
     * @var \FrontOfficeBundle\Entity\User
     */
    private $user1;


    /**
     * Set annee.
     *
     * @param int|null $annee
     *
     * @return Deplacement
     */
    public function setAnnee($annee = null)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee.
     *
     * @return int|null
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set mois.
     *
     * @param int|null $mois
     *
     * @return Deplacement
     */
    public function setMois($mois = null)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois.
     *
     * @return int|null
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set dateValidation.
     *
     * @param \DateTime|null $dateValidation
     *
     * @return Deplacement
     */
    public function setDateValidation($dateValidation = null)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get dateValidation.
     *
     * @return \DateTime|null
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set created.
     *
     * @param \DateTime|null $created
     *
     * @return Deplacement
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
     * @return Deplacement
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
     * Set validation.
     *
     * @param bool|null $validation
     *
     * @return Deplacement
     */
    public function setValidation($validation = null)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation.
     *
     * @return bool|null
     */
    public function getValidation()
    {
        return $this->validation;
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
     * Set user.
     *
     * @param \FrontOfficeBundle\Entity\User|null $user
     *
     * @return Deplacement
     */
    public function setUser(\FrontOfficeBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \FrontOfficeBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user1.
     *
     * @param \FrontOfficeBundle\Entity\User|null $user1
     *
     * @return Deplacement
     */
    public function setUser1(\FrontOfficeBundle\Entity\User $user1 = null)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1.
     *
     * @return \FrontOfficeBundle\Entity\User|null
     */
    public function getUser1()
    {
        return $this->user1;
    }
}
