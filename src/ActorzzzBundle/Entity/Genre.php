<?php
# Fichier Genre.php

namespace src\ActorzzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Genre
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * Bidirectional 
     *
     * @ORM\ManyToMany(targetEntity="Film", mappedBy="listeDesGenres")
     */
    protected $listeDesFilms;

    /**
     * @ORM\Column(type="string", length=90)
     */
    protected $label;
}
?>