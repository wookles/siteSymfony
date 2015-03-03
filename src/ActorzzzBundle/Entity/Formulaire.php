<?php

namespace ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulaire
 */
class Formulaire
{
    /**
     * @var integer
     */
    private $id;
 	
 	protected $nom;

    protected $prenom;
    
    protected $email;
    
    protected $lienImage;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

	public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

 	public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getLienImage()
    {
        return $this->lienImage;
    }
    public function setLienImage($lien)
    {
        $this->lienImage = $lien;
    }

}
