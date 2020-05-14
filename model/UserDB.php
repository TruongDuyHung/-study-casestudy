<?php

namespace Model;

class UserDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }
    public function getUser($email,$password)
    {
        $sql = "select id,email,password from users where email = ? and password = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>