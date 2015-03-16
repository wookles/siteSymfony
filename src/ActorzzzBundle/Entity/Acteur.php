<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\ActeurRepository")
 */
class Acteur
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
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
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
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
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
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
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
     * Get biographie
     *
     * @return string 
     */
    public function getBiographie()
    {
        return $this->biographie;
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
     * Get filmographie
     *
     * @return string 
     */
    public function getFilmographie()
    {
        return $this->filmographie;
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
     * Get idImage
     *
     * @return integer 
     */
    public function getIdImage()
    {
        return $this->idImage;
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

    /**
     * Get idFilm
     *
     * @return integer 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
}
