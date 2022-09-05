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
}