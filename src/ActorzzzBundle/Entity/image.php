<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\imageRepository")
 */
class image
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
     * Set idLien
     *
     * @param integer $idLien
     * @return image
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
