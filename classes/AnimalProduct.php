<?php

require_once __DIR__ . '/Ecommerce.php';

class AnimalProduct extends Ecommerce{

    protected $food;
    protected $game;
    protected $petBed;
    protected $leash;
    protected $bowl;
    protected $aquarium;
    protected $cage;

    public function __construct($_image, $_name, $_brand, $_price, $_food, $_game, $_petBed, $_leash, $_bowl, $_acquarium, $_cage){
        parent::__construct($_image, $_name, $_brand, $_price, $_food, $_game);
        $this->food = $_food;
        $this->game = $_game;
        $this->petBed = $_petBed;
        $this->leash = $_leash;
        $this->bowl = $_bowl;
        $this->acquarium = $_acquarium;
        $this->cage = $_cage;   
    }

}