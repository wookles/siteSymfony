<?php

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
     * @var integer
     *
     * @ORM\Column(name="idVideo", type="integer")
     */
    private $idVideo;


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
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
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
     * Get anneeSortie
     *
     * @return \DateTime 
     */
    public function getAnneeSortie()
    {
        return $this->anneeSortie;
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
     * Get synopsis
     *
     * @return string 
     */
    public function getSynopsis()
    {
        return $this->synopsis;
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
     * Get idImage
     *
     * @return integer 
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * Set idVideo
     *
     * @param integer $idVideo
     * @return FilmPhare
     */
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;

        return $this;
    }

    /**
     * Get idVideo
     *
     * @return integer 
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }
}
