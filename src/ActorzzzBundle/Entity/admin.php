<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * admin
 *
 * @ORM\Table(name="adminzzz")
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\adminRepository")
 */
class admin
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
     * @ORM\Column(name="mel_contact", type="string", length=255)
     */
    private $melContact;

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
     * Set melContact
     *
     * @param string $melContact
     * @return admin
     */
    public function setMelContact($melContact)
    {
        $this->melContact = $melContact;

        return $this;
    }

    /**
     * Get melContact
     *
     * @return string 
     */
    public function getMelContact()
    {
        return $this->melContact;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return admin
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
