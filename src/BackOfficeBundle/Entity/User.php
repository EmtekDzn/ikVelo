<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_type_user_idx", columns={"type_user_id"}), @ORM\Index(name="fk_user_societe1_idx", columns={"societe_id"}), @ORM\Index(name="fk_user_service1_idx", columns={"service_id"}), @ORM\Index(name="fk_user_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var float|null
     *
     * @ORM\Column(name="distance_init", type="float", precision=10, scale=0, nullable=true)
     */
    private $distanceInit;

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
     * @var \BackOfficeBundle\Entity\Service
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     */
    private $service;

    /**
     * @var \BackOfficeBundle\Entity\Societe
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="societe_id", referencedColumnName="id")
     * })
     */
    private $societe;

    /**
     * @var \BackOfficeBundle\Entity\TypeUser
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\TypeUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_user_id", referencedColumnName="id")
     * })
     */
    private $typeUser;

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
     * @param \BackOfficeBundle\Entity\Service|null $service
     *
     * @return User
     */
    public function setService(\BackOfficeBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service.
     *
     * @return \BackOfficeBundle\Entity\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set societe.
     *
     * @param \BackOfficeBundle\Entity\Societe|null $societe
     *
     * @return User
     */
    public function setSociete(\BackOfficeBundle\Entity\Societe $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe.
     *
     * @return \BackOfficeBundle\Entity\Societe|null
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set typeUser.
     *
     * @param \BackOfficeBundle\Entity\TypeUser|null $typeUser
     *
     * @return User
     */
    public function setTypeUser(\BackOfficeBundle\Entity\TypeUser $typeUser = null)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser.
     *
     * @return \BackOfficeBundle\Entity\TypeUser|null
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Set ville.
     *
     * @param \BackOfficeBundle\Entity\Ville|null $ville
     *
     * @return User
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
