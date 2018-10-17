<?php

namespace FrontOfficeBundle\Entity;

/**
 * TypeUser
 */
class TypeUser
{
    /**
     * @var string|null
     */
    private $typeUser;

    /**
     * @var int
     */
    private $id;


    /**
     * Set typeUser.
     *
     * @param string|null $typeUser
     *
     * @return TypeUser
     */
    public function setTypeUser($typeUser = null)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser.
     *
     * @return string|null
     */
    public function getTypeUser()
    {
        return $this->typeUser;
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
