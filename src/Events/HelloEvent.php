<?php
namespace App\Events;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Message;
use Symfony\Contracts\EventDispatcher\Event;

class HelloEvent extends Event
{
    private $name;
    public $message;
    const NAME = 'bienvenue.utilisateur';

    public function __construct($name)
    {
        $this->name=$name;
        $this->message='<h1>Bienvenue parmis nous '.$this->name.'</h1>';
    }
 
    public function onHello()
    {
        return $this->message;
    }
     
}
?>