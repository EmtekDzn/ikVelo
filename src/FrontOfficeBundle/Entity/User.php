<?php

namespace FrontOfficeBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @var string|null
     */
    private $adresse;

    /**
     * @var float|null
     */
    private $distanceInit;

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
     * @var \FrontOfficeBundle\Entity\Service
     */
    private $service;

    /**
     * @var \FrontOfficeBundle\Entity\Societe
     */
    private $societe;

    /**
     * @var \FrontOfficeBundle\Entity\TypeUser
     */
    private $typeUser;

    /**
     * @var \FrontOfficeBundle\Entity\Ville
     */
    private $ville;


    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return User
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string|null $prenom
     *
     * @return User
     */
    public function setPrenom($prenom = null)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string|null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse.
     *
     * @param string|null $adresse
     *
     * @return User
     */
    public function setAdresse($adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string|null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set distanceInit.
     *
     * @param float|null $distanceInit
     *
     * @return User
     */
    public function setDistanceInit($distanceInit = null)
    {
        $this->distanceInit = $distanceInit;

        return $this;
    }

    /**
     * Get distanceInit.
     *
     * @return float|null
     */
    public function getDistanceInit()
    {
        return $this->distanceInit;
    }

    /**
     * Set created.
     *
     * @param \DateTime|null $created
     *
     * @return User
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
     * @return User
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
     * Set service.
     *
     * @param \FrontOfficeBundle\Entity\Service|null $service
     *
     * @return User
     */
    public function setService(\FrontOfficeBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service.
     *
     * @return \FrontOfficeBundle\Entity\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set societe.
     *
     * @param \FrontOfficeBundle\Entity\Societe|null $societe
     *
     * @return User
     */
    public function setSociete(\FrontOfficeBundle\Entity\Societe $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe.
     *
     * @return \FrontOfficeBundle\Entity\Societe|null
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set typeUser.
     *
     * @param \FrontOfficeBundle\Entity\TypeUser|null $typeUser
     *
     * @return User
     */
    public function setTypeUser(\FrontOfficeBundle\Entity\TypeUser $typeUser = null)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser.
     *
     * @return \FrontOfficeBundle\Entity\TypeUser|null
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Set ville.
     *
     * @param \FrontOfficeBundle\Entity\Ville|null $ville
     *
     * @return User
     */
    public function setVille(\FrontOfficeBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return \FrontOfficeBundle\Entity\Ville|null
     */
    public function getVille()
    {
        return $this->ville;
    }
}
