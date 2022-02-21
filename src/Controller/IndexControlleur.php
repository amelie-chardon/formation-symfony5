<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Events\HelloEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


class IndexController extends AbstractController
{

    /**
     * @Route("/hello-world",name="accueil")
     */
    public function helloWord(Request $request): Response
    {
        return new Response('<h1>Hello World</h1>');
    }

    /**
     * Hello world, avec Twig cette fois :)
     *
     * @Route("/hello/{name}", name="hello")
     */
    public function hello($name)
    {
        $this->render('hello.html.twig', ['name' => $name]);
    }

    
    /**
     * @Route("/hello-world/{name}", name="nom")
     */
    public function helloWorldName(Request $request, $name, EventDispatcherInterface $eventDispatcher)
    {
        $event= new HelloEvent($name);
        $eventDispatcher->dispatch($event, HelloEvent::NAME);
        return new Response('<h1>'.$event->message.'</h1>');
        //return new Response('<h1>Hello '.$name.'</h1>');
    }

    /**
     *
     * @Route("/chaussures", name="chaussures")
     */
    public function chaussures()
    {
        $this->render('chaussures.html.twig');
    }
}
