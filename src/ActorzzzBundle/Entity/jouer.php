<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jouer
 *
 * @ORM\Table(name="interpretation")
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\jouerRepository")
 */
class jouer
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
     * @ORM\Column(name="id_actorzzz", type="integer")
     */
    private $idActorzzz;


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
     * Set idActorzzz
     *
     * @param integer $idActorzzz
     * @return jouer
     */
    public function setIdActorzzz($idActorzzz)
    {
        $this->idActorzzz = $idActorzzz;

        return $this;
    }

    /**
     * Get idActorzzz
     *
     * @return integer 
     */
    public function getIdActorzzz()
    {
        return $this->idActorzzz;
    }
}
