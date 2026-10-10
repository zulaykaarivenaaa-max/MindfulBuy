<?php

require_once "app/models/Database.php";

class User extends Database
{
    // Method untuk menyimpan data login/registrasi
    public function saveLoginData($username, $password)
    {
        $username = $this->conn->real_escape_string($username);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password) 
                  VALUES ('$username', '$password')";

        return $this->conn->query($query);
    }
}