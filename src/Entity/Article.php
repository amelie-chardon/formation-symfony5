<?php
// src/Entity/Article.php
namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;


class Article
{
    /**
     * @Assert\NotBlank(message = "Un nom doit être associé à l'article")
     */
    private $nom;

    private $description;

    /**
     * @Assert\NotBlank(message = "Un prix doit être associé à l'article")
     *
     * @Assert\GreaterThan(0)
     */
    private $prix;

    private $tailles;

    public function __construct()
    {
        $this->tailles = new ArrayCollection;
    }
    
    public function getNom():string
    {
        return $this->nom;
    }
    
    public function setNom($nom):void
    {
        $this->nom = $nom;
    }

    public function getDescription():string
    {
        return $this->description;
    }
    
    public function setDescription($description):void
    {
        $this->description = $description;
    }

    public function getPrix():int
    {
        return $this->prix;
    }
    
    public function setPrix($prix):void
    {
        $this->prix = $prix;
    }

    public function getTailles():ArrayCollection
    {
        return $this->tailles;
    }
    
    public function setTailles($tailles):void
    {
        $this->tailles = $tailles;
    }


}
