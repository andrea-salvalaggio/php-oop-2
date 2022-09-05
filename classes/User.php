<?php

class User{

    protected $name;
    protected $surname;
    protected $email;
    protected $password;

    public function __construct($_name, $_surname, $_email, $_password){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->password = $_password;
    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }
    public function getSurname(){
        return $this->surname;
    }

    public function setEmail($_email){
        $this->email = $_email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPassword($_password){
        $this->password = $_password;
    }
    public function getPassword(){
        return $this->password;
    }
}