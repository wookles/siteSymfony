<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\MembreRepository")
 */
class Membre
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
     * @var integer
     *
     * @ORM\Column(name="typeMembre", type="integer")
     */
    private $typeMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoMembre", type="string", length=255)
     */
    private $pseudoMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="passMembre", type="string", length=255)
     */
    private $passMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="melMembre", type="string", length=255)
     */
    private $melMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idImage", type="integer")
     */
    private $idImage;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAdresse", type="integer")
     */
    private $idAdresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAnniv", type="date")
     */
    private $dateAnniv;


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
     * Set typeMembre
     *
     * @param integer $typeMembre
     * @return Membre
     */
    public function setTypeMembre($typeMembre)
    {
        $this->typeMembre = $typeMembre;

        return $this;
    }

    /**
     * Get typeMembre
     *
     * @return integer 
     */
    public function getTypeMembre()
    {
        return $this->typeMembre;
    }

    /**
     * Set pseudoMembre
     *
     * @param string $pseudoMembre
     * @return Membre
     */
    public function setPseudoMembre($pseudoMembre)
    {
        $this->pseudoMembre = $pseudoMembre;

        return $this;
    }

    /**
     * Get pseudoMembre
     *
     * @return string 
     */
    public function getPseudoMembre()
    {
        return $this->pseudoMembre;
    }

    /**
     * Set passMembre
     *
     * @param string $passMembre
     * @return Membre
     */
    public function setPassMembre($passMembre)
    {
        $this->passMembre = $passMembre;

        return $this;
    }

    /**
     * Get passMembre
     *
     * @return string 
     */
    public function getPassMembre()
    {
        return $this->passMembre;
    }

    /**
     * Set melMembre
     *
     * @param string $melMembre
     * @return Membre
     */
    public function setMelMembre($melMembre)
    {
        $this->melMembre = $melMembre;

        return $this;
    }

    /**
     * Get melMembre
     *
     * @return string 
     */
    public function getMelMembre()
    {
        return $this->melMembre;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return Membre
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
     * Set idAdresse
     *
     * @param integer $idAdresse
     * @return Membre
     */
    public function setIdAdresse($idAdresse)
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }

    /**
     * Get idAdresse
     *
     * @return integer 
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * Set dateAnniv
     *
     * @param \DateTime $dateAnniv
     * @return Membre
     */
    public function setDateAnniv($dateAnniv)
    {
        $this->dateAnniv = $dateAnniv;

        return $this;
    }

    /**
     * Get dateAnniv
     *
     * @return \DateTime 
     */
    public function getDateAnniv()
    {
        return $this->dateAnniv;
    }
}
