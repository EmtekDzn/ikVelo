<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeplacementJour
 *
 * @ORM\Table(name="deplacement_jour", indexes={@ORM\Index(name="fk_deplacement_jour_type_deplacement1_idx", columns={"type_deplacement_id"}), @ORM\Index(name="fk_deplacement_jour_deplacement1_idx", columns={"deplacement_id"})})
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class DeplacementJour
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="nb_km", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbKm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="jour", type="integer", nullable=true)
     */
    private $jour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

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
     * @var \BackOfficeBundle\Entity\Deplacement
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Deplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deplacement_id", referencedColumnName="id")
     * })
     */
    private $deplacement;

    /**
     * @var \BackOfficeBundle\Entity\TypeDeplacement
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\TypeDeplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_deplacement_id", referencedColumnName="id")
     * })
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
     * @param \BackOfficeBundle\Entity\Deplacement|null $deplacement
     *
     * @return DeplacementJour
     */
    public function setDeplacement(\BackOfficeBundle\Entity\Deplacement $deplacement = null)
    {
        $this->deplacement = $deplacement;

        return $this;
    }

    /**
     * Get deplacement.
     *
     * @return \BackOfficeBundle\Entity\Deplacement|null
     */
    public function getDeplacement()
    {
        return $this->deplacement;
    }

    /**
     * Set typeDeplacement.
     *
     * @param \BackOfficeBundle\Entity\TypeDeplacement|null $typeDeplacement
     *
     * @return DeplacementJour
     */
    public function setTypeDeplacement(\BackOfficeBundle\Entity\TypeDeplacement $typeDeplacement = null)
    {
        $this->typeDeplacement = $typeDeplacement;

        return $this;
    }

    /**
     * Get typeDeplacement.
     *
     * @return \BackOfficeBundle\Entity\TypeDeplacement|null
     */
    public function getTypeDeplacement()
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
