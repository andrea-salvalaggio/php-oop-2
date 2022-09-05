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

    public function setImage($_image){
        $this->image = $_image;
    }
    public function getImage(){
        return $this->image;
    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }

    public function setBrand($_brand){
        $this->brand = $_brand;
    }
    public function getBrand(){
        return $this->brand;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }
    public function getPrice(){
        return $this->price;
    }

}