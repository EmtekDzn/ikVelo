<?php

namespace FrontOfficeBundle\Entity;

/**
 * Service
 */
class Service
{
    /**
     * @var string|null
     */
    private $service;

    /**
     * @var int
     */
    private $id;


    /**
     * Set service.
     *
     * @param string|null $service
     *
     * @return Service
     */
    public function setService($service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service.
     *
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
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
