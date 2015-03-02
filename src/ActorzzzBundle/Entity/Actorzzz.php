<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actorzzz
 */
class Actorzzz
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomActorzzz;

    /**
     * @var string
     */
    private $prenomActorzzz;

    /**
     * @var boolean
     */
    private $sexeActorzzz;

    /**
     * @var string
     */
    private $lienImageActorzzz;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomActorzzz
     *
     * @param string $nomActorzzz
     * @return Actorzzz
     */
    public function setNomActorzzz($nomActorzzz)
    {
        $this->nomActorzzz = $nomActorzzz;

        return $this;
    }

    /**
     * Get nomActorzzz
     *
     * @return string 
     */
    public function getNomActorzzz()
    {
        return $this->nomActorzzz;
    }

    /**
     * Set prenomActorzzz
     *
     * @param string $prenomActorzzz
     * @return Actorzzz
     */
    public function setPrenomActorzzz($prenomActorzzz)
    {
        $this->prenomActorzzz = $prenomActorzzz;

        return $this;
    }

    /**
     * Get prenomActorzzz
     *
     * @return string 
     */
    public function getPrenomActorzzz()
    {
        return $this->prenomActorzzz;
    }

    /**
     * Set sexeActorzzz
     *
     * @param boolean $sexeActorzzz
     * @return Actorzzz
     */
    public function setSexeActorzzz($sexeActorzzz)
    {
        $this->sexeActorzzz = $sexeActorzzz;

        return $this;
    }

    /**
     * Get sexeActorzzz
     *
     * @return boolean 
     */
    public function getSexeActorzzz()
    {
        return $this->sexeActorzzz;
    }

    /**
     * Set lienImageActorzzz
     *
     * @param string $lienImageActorzzz
     * @return Actorzzz
     */
    public function setLienImageActorzzz($lienImageActorzzz)
    {
        $this->lienImageActorzzz = $lienImageActorzzz;

        return $this;
    }

    /**
     * Get lienImageActorzzz
     *
     * @return string 
     */
    public function getLienImageActorzzz()
    {
        return $this->lienImageActorzzz;
    }
}
