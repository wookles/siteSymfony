<?php

// src/ActorzzzBundle/Entity/Adresse.php
namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\AdresseRepository")
 */
class Adresse
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
     * @ORM\Column(name="champ1", type="string", length=255)
     */
    private $champ1;

    /**
     * @var string
     *
     * @ORM\Column(name="champ2", type="string", length=255)
     */
    private $champ2;

    /**
     * @var string
     *
     * @ORM\Column(name="champ3", type="string", length=255)
     */
    private $champ3;

    /**
     * @var string
     *
     * @ORM\Column(name="champ4", type="string", length=255)
     */
    private $champ4;

    /**
     * @var string
     *
     * @ORM\Column(name="champ5", type="string", length=255)
     */
    private $champ5;

    /**
     * @var string
     *
     * @ORM\Column(name="champ6", type="string", length=255)
     */
    private $champ6;


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
     * @return Adresse
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
     * Set champ1
     *
     * @param string $champ1
     * @return Adresse
     */
    public function setChamp1($champ1)
    {
        $this->champ1 = $champ1;

        return $this;
    }

    /**
     * Get champ1
     *
     * @return string 
     */
    public function getChamp1()
    {
        return $this->champ1;
    }

    /**
     * Set champ2
     *
     * @param string $champ2
     * @return Adresse
     */
    public function setChamp2($champ2)
    {
        $this->champ2 = $champ2;

        return $this;
    }

    /**
     * Get champ2
     *
     * @return string 
     */
    public function getChamp2()
    {
        return $this->champ2;
    }

    /**
     * Set champ3
     *
     * @param string $champ3
     * @return Adresse
     */
    public function setChamp3($champ3)
    {
        $this->champ3 = $champ3;

        return $this;
    }

    /**
     * Get champ3
     *
     * @return string 
     */
    public function getChamp3()
    {
        return $this->champ3;
    }

    /**
     * Set champ4
     *
     * @param string $champ4
     * @return Adresse
     */
    public function setChamp4($champ4)
    {
        $this->champ4 = $champ4;

        return $this;
    }

    /**
     * Get champ4
     *
     * @return string 
     */
    public function getChamp4()
    {
        return $this->champ4;
    }

    /**
     * Set champ5
     *
     * @param string $champ5
     * @return Adresse
     */
    public function setChamp5($champ5)
    {
        $this->champ5 = $champ5;

        return $this;
    }

    /**
     * Get champ5
     *
     * @return string 
     */
    public function getChamp5()
    {
        return $this->champ5;
    }

    /**
     * Set champ6
     *
     * @param string $champ6
     * @return Adresse
     */
    public function setChamp6($champ6)
    {
        $this->champ6 = $champ6;

        return $this;
    }

    /**
     * Get champ6
     *
     * @return string 
     */
    public function getChamp6()
    {
        return $this->champ6;
    }
}
