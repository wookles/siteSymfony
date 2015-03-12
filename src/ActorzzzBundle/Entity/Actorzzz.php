<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * actorzzz
 *
 * @ORM\Table(name="Actorzzz")
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\actorzzzRepository")
 */
class Actorzzz
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
     * @ORM\Column(name="nomActorzzz", type="string", length=255)
     */
    private $nomActorzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomActorzzz", type="string", length=255)
     */
    private $prenomActorzzz;

    /**
     * @var integer
     *
     * @ORM\Column(name="sexeActorzzz", type="integer")
     */
    private $sexeActorzzz;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_image", type="integer")
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
     * Set nomActorzzz
     *
     * @param string $nomActorzzz
     * @return Actorzzz
     */
    public function setNom($nomActorzzz)
    {
        $this->nomActorzzz = $nomActorzzz;

        return $this;
    }

    /**
     * Get nomActorzzz
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nomActorzzz;
    }

    /**
     * Set prenomActorzzz
     *
     * @param string $prenomActorzzz
     * @return Actorzzz
     */
    public function setPrenom($prenomActorzzz)
    {
        $this->prenomActorzzz = $prenomActorzzz;

        return $this;
    }

    /**
     * Get prenomActorzzz
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenomActorzzz;
    }

    /**
     * Set sexeActorzzz
     *
     * @param integer $sexeActorzzz
     * @return Actorzzz
     */
    public function setSexe($sexeActorzzz)
    {
        $this->sexeActorzzz = $sexeActorzzz;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return integer 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return Actorzzz
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
