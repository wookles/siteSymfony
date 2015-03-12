<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * film
 *
 * @ORM\Table(name="filmzzz")
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\filmRepository")
 */
class film
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
     * @ORM\Column(name="annee_sortie", type="date")
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
     * @ORM\Column(name="id_image", type="integer")
     */
    private $idImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lien", type="integer")
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
     * Set titre
     *
     * @param string $titre
     * @return film
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
     * @return film
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
     * @return film
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
     * @return film
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
     * Set idLien
     *
     * @param integer $idLien
     * @return film
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
