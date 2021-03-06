<?php

// src/ActorzzzBundle/Entity/Image.php
namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\ImageRepository")
 */
class Image{
	
	///////////////
	// Variables //
	///////////////

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
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;


	/////////////
	// Getters //
	/////////////

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
     * Set lien
     *
     * @param string $lien
     * @return Image
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }
    
    /////////////
    // Mapping //
    /////////////
    
    /**
     * @ORM\OneToMany(targetEntity="Acteur", mappedBy="image")
     */
    protected $acteur;

    public function __construct()
    {
        $this->acteur = new ArrayCollection();
    }
}
