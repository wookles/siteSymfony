<?php

// src/ActorzzzBundle/Entity/Acteur.php
namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\ActeurRepository")
 */
class Acteur{

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="biographie", type="string", length=1024)
     */
    private $biographie;

    /**
     * @var string
     *
     * @ORM\Column(name="filmographie", type="string", length=1024)
     */
    private $filmographie;

    /**
     * @var integer
     *
     * @ORM\Column(name="idImage", type="integer")
     */
    private $idImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFilm", type="integer")
     */
    private $idFilm;


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
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    /**
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
    }
    
    /**
     * Get biographie
     *
     * @return string 
     */
    public function getBiographie()
    {
        return $this->biographie;
    }
    
    /**
     * Get filmographie
     *
     * @return string 
     */
    public function getFilmographie()
    {
        return $this->filmographie;
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
     * Get idFilm
     *
     * @return integer 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
    
    
	/////////////
	// Setters //
	/////////////
	
    /**
     * Set nom
     *
     * @param string $nom
     * @return Acteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Acteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     * @return Acteur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Set biographie
     *
     * @param string $biographie
     * @return Acteur
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;

        return $this;
    }

    /**
     * Set filmographie
     *
     * @param string $filmographie
     * @return Acteur
     */
    public function setFilmographie($filmographie)
    {
        $this->filmographie = $filmographie;

        return $this;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return Acteur
     */
    public function setIdImage($idImage)
    {
        $this->idImage = $idImage;

        return $this;
    }

    /**
     * Set idFilm
     *
     * @param integer $idFilm
     * @return Acteur
     */
    public function setIdFilm($idFilm)
    {
        $this->idFilm = $idFilm;

        return $this;
    }
   
    
    /////////////
    // Mapping //
    /////////////
    
    /**
     * @ORM\OneToMany(targetEntity="FilmPhare", mappedBy="acteur")
     */
    protected $filmPhare;

    public function __construct()
    {
        $this->filmPhare = new ArrayCollection();
    }

    /**
     * Add filmPhare
     *
     * @param \ActorzzzBundle\Entity\FilmPhare $filmPhare
     * @return Acteur
     */
    public function addFilmPhare(\ActorzzzBundle\Entity\FilmPhare $filmPhare)
    {
        $this->filmPhare[] = $filmPhare;

        return $this;
    }

    /**
     * Remove filmPhare
     *
     * @param \ActorzzzBundle\Entity\FilmPhare $filmPhare
     */
    public function removeFilmPhare(\ActorzzzBundle\Entity\FilmPhare $filmPhare)
    {
        $this->filmPhare->removeElement($filmPhare);
    }

    /**
     * Get filmPhare
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilmPhare()
    {
        return $this->filmPhare;
    }
}
