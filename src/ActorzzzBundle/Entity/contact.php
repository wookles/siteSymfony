<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\contactRepository")
 */
class contact
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
     * @ORM\Column(name="id_memberzzz", type="integer")
     */
    private $idMemberzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=512)
     */
    private $message;


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
     * Set idMemberzzz
     *
     * @param integer $idMemberzzz
     * @return contact
     */
    public function setIdMemberzzz($idMemberzzz)
    {
        $this->idMemberzzz = $idMemberzzz;

        return $this;
    }

    /**
     * Get idMemberzzz
     *
     * @return integer 
     */
    public function getIdMemberzzz()
    {
        return $this->idMemberzzz;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
