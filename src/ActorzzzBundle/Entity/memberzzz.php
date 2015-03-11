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
     * @var integer
     *
     * @ORM\Column(name="typeMemberzzz", type="integer")
     */
    private $typeMemberzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoMemberzzz", type="string", length=255)
     */
    private $pseudoMemberzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="passMemberzzz", type="string", length=255)
     */
    private $passMemberzzz;

    /**
     * @var string
     *
     * @ORM\Column(name="melMemberzzz", type="string", length=255)
     */
    private $melMemberzzz;

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
     * Set typeMemberzzz
     *
     * @param integer $typeMemberzzz
     * @return memberzzz
     */
    public function setTypeMemberzzz($typeMemberzzz)
    {
        $this->typeMemberzzz = $typeMemberzzz;

        return $this;
    }

    /**
     * Get typeMemberzzz
     *
     * @return integer 
     */
    public function getTypeMemberzzz()
    {
        return $this->typeMemberzzz;
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
     * @param integer $idAdresse
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
     * @return memberzzz
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
