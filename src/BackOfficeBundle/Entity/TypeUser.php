<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUser
 *
 * @ORM\Table(name="type_user")
 * @ORM\Entity
 */
class TypeUser
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="type_user", type="string", length=45, nullable=true)
     */
    private $typeUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
