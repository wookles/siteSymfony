<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idLien;


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
     * Set idLien
     *
     * @param integer $idLien
     * @return Image
     */
    public function setIdLien($idLien)
    {
        $this->idLien = $idLien;

        return $this;
    }

    /**
     * Get idLien
     *
     * @return integer 
     */
    public function getIdLien()
    {
        return $this->idLien;
    }
}
