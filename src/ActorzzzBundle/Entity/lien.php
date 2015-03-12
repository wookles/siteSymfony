<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lien
 *
 * @ORM\Table(name="lien")
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\lienRepository")
 */
class lien
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
     * @ORM\Column(name="type_lien", type="integer")
     */
    private $typeLien;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_lien", type="string", length=512)
     */
    private $nomLien;


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
     * Set typeLien
     *
     * @param integer $typeLien
     * @return lien
     */
    public function setTypeLien($typeLien)
    {
        $this->typeLien = $typeLien;

        return $this;
    }

    /**
     * Get typeLien
     *
     * @return integer 
     */
    public function getTypeLien()
    {
        return $this->typeLien;
    }

    /**
     * Set nomLien
     *
     * @param string $nomLien
     * @return lien
     */
    public function setNomLien($nomLien)
    {
        $this->nomLien = $nomLien;

        return $this;
    }

    /**
     * Get nomLien
     *
     * @return string 
     */
    public function getNomLien()
    {
        return $this->nomLien;
    }
}
