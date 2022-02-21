<?php
// src/Entity/Article.php
namespace App\Entity;
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
    /**
     * @Assert\Range(
     *      min = 18,
     *      max = 48,
     *      notInRangeMessage = "Pointure comprise entre {{ min }} et {{ max }}.",
     * )
     */
    private $tailles;


    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrix()
    {
        return $this->prix;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getTailles()
    {
        return $this->tailles;
    }
    
    public function setTailles($tailles)
    {
        $this->tailles = $tailles;
    }


}
