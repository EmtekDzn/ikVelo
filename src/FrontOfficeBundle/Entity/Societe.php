<?php

namespace FrontOfficeBundle\Entity;

/**
 * Societe
 */
class Societe
{
    /**
     * @var string|null
     */
    private $societe;

    /**
     * @var string|null
     */
    private $adresse;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \FrontOfficeBundle\Entity\Ville
     */
    private $ville;


    /**
     * Set societe.
     *
     * @param string|null $societe
     *
     * @return Societe
     */
    public function setSociete($societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe.
     *
     * @return string|null
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set adresse.
     *
     * @param string|null $adresse
     *
     * @return Societe
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ville.
     *
     * @param \FrontOfficeBundle\Entity\Ville|null $ville
     *
     * @return Societe
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
