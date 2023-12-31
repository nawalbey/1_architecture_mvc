<?php

namespace Models;

class Database
{
    // connetion à la base de données
    private $host = "localhost";
    private $db_name = "base_project";
    private $username = "root";
    private $password = "";
    private $connetion = null;

    // getter pour la connetion
    public function bddConnect()
    {
        try {
            $this->connetion = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo "Erreur de connetion : " . $exception->getMessage();
        }

        return $this->connetion;
    }
}