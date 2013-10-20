<?php

//@todo implement autoload here
require_once 'inc/collectionClass.php';
require_once 'inc/KeyInvalidException.php';
require_once 'inc/KeyhasUserException.php';

class Salut {

    public $nume;
    public $numar;

    public function __construct($name, $numar)
    {

        $this->nume = $name;
        $this->numar = $numar;
    }

    public function __toString()
    {
        return $this->nume . " are numarul " . $this->numar;
    }

}

$c = new Collection();
$c->addItem(new Salut("Ion", 14), "Ion");
$c->addItem(new Salut("Ed", 37), "ed");
$c->addItem(new Salut("Bob", 49), "bob");

$c->deleteItem("Ion");

//usage

try {
    $c->getItem("Ion");
} catch(KeyInvalidException $e){
    print "Colectia nu il contine pe Ion.";
}