<?php

// src/ActorzzzBundle/Entity/Admin.php
namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\AdminRepository")
 */
class Admin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="melAdmin", type="string", length=255)
     */
    private $melAdmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idImage", type="integer")
     */
    private $idImage;


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
     * Set melAdmin
     *
     * @param string $melAdmin
     * @return Admin
     */
    public function setMelAdmin($melAdmin)
    {
        $this->melAdmin = $melAdmin;

        return $this;
    }

    /**
     * Get melAdmin
     *
     * @return string 
     */
    public function getMelAdmin()
    {
        return $this->melAdmin;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return Admin
     */
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;

        return $this;
    }

    /**
     * Get idImage
     *
     * @return integer 
     */
    public function getIdImage()
    {
        return $this->idImage;
    }
}
