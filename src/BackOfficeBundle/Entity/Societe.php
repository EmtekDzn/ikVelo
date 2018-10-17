<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe", indexes={@ORM\Index(name="fk_societe_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="societe", type="string", length=45, nullable=true)
     */
    private $societe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \BackOfficeBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     * })
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
     * @param \BackOfficeBundle\Entity\Ville|null $ville
     *
     * @return Societe
     */
    public function setVille(\BackOfficeBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return \BackOfficeBundle\Entity\Ville|null
     */
    public function getVille()
    {
        return $this->ville;
    }
}
