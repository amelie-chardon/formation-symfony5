<?php
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleType;
use App\Entity\Article;
use App\Entity\Number;

use Symfony\Component\Validator\Validation;



class FormController extends AbstractController
{
    /**
     * @Route("/form/new")
     */
    public function new(Request $request)
    {
        $article = new Article();
        /*Validations*/
        $validator = Validation::createValidator();
        $violations = $validator->validate($article);

        if (0 !== count($violations)) {
            // Affiche les erreurs
            foreach ($violations as $violation) {
                echo $violation->getMessage().'<br>';
            }
        }

/*
        $article->setNom('Hello World');
        $article->setDescription('Un très court article.');
        $article->setPrix('12');
        
*/

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($article);
        }
    
        return $this->render('chaussures.html.twig', array(
            'shoe' => $form->createView(),
        ));
    }
}