<?php

// src/ActorzzzBundle/Entity/FilmPhare.php
namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilmPhare
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\FilmPhareRepository")
 */
class FilmPhare
{
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeSortie", type="date")
     */
    private $anneeSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="string", length=1024)
     */
    private $synopsis;

    /**
     * @var integer
     *
     * @ORM\Column(name="idImage", type="integer")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="lienVideo", type="string", length=255)
     */
    private $lienVideo;


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
     * Get synopsis
     *
     * @return string 
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }
    
    /**
     * Get anneeSortie
     *
     * @return \DateTime 
     */
    public function getAnneeSortie()
    {
        return $this->anneeSortie;
    }
	
	/**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
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
    
    /**
     * Get lienVideo
     *
     * @return string 
     */
    public function getLienVideo()
    {
        return $this->lienVideo;
    }
    
    
    /////////////
	// Setters //
	/////////////
    
    /**
     * Set titre
     *
     * @param string $titre
     * @return FilmPhare
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Set anneeSortie
     *
     * @param \DateTime $anneeSortie
     * @return FilmPhare
     */
    public function setAnneeSortie($anneeSortie)
    {
        $this->anneeSortie = $anneeSortie;

        return $this;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     * @return FilmPhare
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return FilmPhare
     */
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;

        return $this;
    }

    /**
     * Set lienVideo
     *
     * @param string $lienVideo
     * @return FilmPhare
     */
    public function setLienVideo($lienVideo)
    {
        $this->lienVideo = $lienVideo;

        return $this;
    }
    
    /////////////
    // Mapping //
	/////////////
	/**
     * @ORM\ManyToOne(targetEntity="Acteur", inversedBy="products")
     * @ORM\JoinColumn(name="acteur_id", referencedColumnName="id")
     */
    protected $acteur;



    /**
     * Set acteur
     *
     * @param \ActorzzzBundle\Entity\Acteur $acteur
     * @return FilmPhare
     */
    public function setActeur(\ActorzzzBundle\Entity\Acteur $acteur = null)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get acteur
     *
     * @return \ActorzzzBundle\Entity\Acteur 
     */
    public function getActeur()
    {
        return $this->acteur;
    }
}
