<?php

namespace Model;

class UserDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getUser($email, $password)
    {
        $sql = "select id,email,password from users where email = ? and password = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addUser($email, $name, $password)
    {
        $sql = "insert into users(email,name,password) values (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $password);
        $stmt->execute();
    }
}

?>