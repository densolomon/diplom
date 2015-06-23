<?php

class UserHandler {

    private $_user;

    public function __construct(){}

    public function createUser (array $user) {
        $id_user      = (!empty($id_user["id_user"])) ? $id_user["id_user"] : "NULL";
        $name         = (!empty($name["name"])) ? $name["name"] : "NULL";
        $surname      = (!empty($surname["surname"])) ? $surname["surname"] : "NULL";
        $patronymic   = (!empty($patronymic["patronymic"])) ? $patronymic["patronymic"] : "NULL";
        $email        = (!empty($email["email"])) ? $email["email"] : "NULL";
        $phone_number = (!empty($phone_number["phone_number"])) ? $phone_number["phone_number"] : "NULL";
        $adress       = (!empty($adress["adress"])) ? $adress["adress"] : "NULL";
        $status       = (!empty($status["status"])) ? $status["status"] : "NULL";

        $this->_user = new User();
    }

    public function addUser(User $user = null) {
        $db = DatabaseConnection::getInstance()->dbConn;

        $db->execute();
        $db->query();
    }
}