<?php


class RegisterController {
    public function indexAction() {
//        echo "reg index";
        $db = DatabaseConnection::getInstance()   ;
        $db = $db->dbConn;


        $int = (string) rand(10,990);
        $id = date("Ymd").$int ;
        $name = $_POST["firstName"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $sql = "INSERT INTO user (id_user,name,password,phone_number) VALUES ('{$id}','{$name}','{$pass}','{$email}')";
        if ($db->exec($sql)) {
            header("Location: index");
        }
    }
}