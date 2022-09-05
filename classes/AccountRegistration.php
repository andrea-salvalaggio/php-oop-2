<?php

require_once __DIR__ . '/User.php';

class AccountRegistration extends User{

    protected $isRegistered = 0;

    public function __construct($_name, $_surname, $_email, $_password, $_isRegistered){
        parent::__construct($_name, $_surname, $_email, $_password);
        $this->isRegistered = $_isRegistered;
    }
}