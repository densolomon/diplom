<?php

class User {
    public $id_user;
    public $name;
    public $password;
    public $surname;
    public $patronymic;
    public $email;
    public $phone_number;
    public $adress;
    public $status;

    public function __construct ($id_user="NULL", $name="NULL", $password="NULL", $surname="NULL",
                                 $patronymic="NULL", $email="NULL", $phone_number="NULL",
                                 $adress="NULL", $status="NULL"
    ){
        $this->id_user      = ($id_user     =="NULL") ? $this->id_user      : $id_user;
        $this->name         = ($name        =="NULL") ? $this->name         : $name;
        $this->password     = ($password    =="NULL") ? $this->password     : $password;
        $this->surname      = ($surname     =="NULL") ? $this->surname      : $surname;
        $this->patronymic   = ($patronymic  =="NULL") ? $this->patronymic   : $patronymic;
        $this->email        = ($email       =="NULL") ? $this->email        : $email;
        $this->phone_number = ($phone_number=="NULL") ? $this->phone_number : $phone_number;
        $this->adress       = ($adress      =="NULL") ? $this->adress       : $adress;
        $this->status       = ($status      =="NULL") ? $this->status       : $status;
    }
} 