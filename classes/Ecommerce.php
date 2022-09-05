<?php
class Ecommerce{

    protected $image;
    protected $name;
    protected $brand;
    protected $price;

    public function __construct($_image, $_name, $_brand, $_price){
        $this->image = $_image;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }

}