<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * memberzzz
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ActorzzzBundle\Entity\memberzzzRepository")
 */
class memberzzz
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
     * @ORM\Column(name="pseudo_memberzzz", type="string", length=255)
     */
    private $pseudoMemberzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="pass_memberzzz", type="string", length=255)
     */
    private $passMemberzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="mel_memberzzz", type="string", length=255)
     */
    private $melMemberzzz;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_image", type="integer")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="id_adresse", type="string", length=255)
     */
    private $idAdresse;


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
     * Set pseudoMemberzzz
     *
     * @param string $pseudoMemberzzz
     * @return memberzzz
     */
    public function setPseudoMemberzzz($pseudoMemberzzz)
    {
        $this->pseudoMemberzzz = $pseudoMemberzzz;

        return $this;
    }

    /**
     * Get pseudoMemberzzz
     *
     * @return string 
     */
    public function getPseudoMemberzzz()
    {
        return $this->pseudoMemberzzz;
    }

    /**
     * Set passMemberzzz
     *
     * @param string $passMemberzzz
     * @return memberzzz
     */
    public function setPassMemberzzz($passMemberzzz)
    {
        $this->passMemberzzz = $passMemberzzz;

        return $this;
    }

    /**
     * Get passMemberzzz
     *
     * @return string 
     */
    public function getPassMemberzzz()
    {
        return $this->passMemberzzz;
    }

    /**
     * Set melMemberzzz
     *
     * @param string $melMemberzzz
     * @return memberzzz
     */
    public function setMelMemberzzz($melMemberzzz)
    {
        $this->melMemberzzz = $melMemberzzz;

        return $this;
    }

    /**
     * Get melMemberzzz
     *
     * @return string 
     */
    public function getMelMemberzzz()
    {
        return $this->melMemberzzz;
    }

    /**
     * Set idImage
     *
     * @param integer $idImage
     * @return memberzzz
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
     * @param string $idAdresse
     * @return memberzzz
     */
    public function setIdAdresse($idAdresse)
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }

    /**
     * Get idAdresse
     *
     * @return string 
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }
}
