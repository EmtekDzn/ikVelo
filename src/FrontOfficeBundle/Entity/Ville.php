<?php

namespace FrontOfficeBundle\Entity;

/**
 * Ville
 */
class Ville
{
    /**
     * @var string|null
     */
    private $ville;

    /**
     * @var string|null
     */
    private $cp;

    /**
     * @var int
     */
    private $id;


    /**
     * Set ville.
     *
     * @param string|null $ville
     *
     * @return Ville
     */
    public function setVille($ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string|null
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp.
     *
     * @param string|null $cp
     *
     * @return Ville
     */
    public function setCp($cp = null)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp.
     *
     * @return string|null
     */
    public function getCp()
    {
        return $this->cp;
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
