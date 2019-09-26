<?php

class Database
{
    // Attributes
    private $db = 'mysql:host=localhost;dbname=app_db';
    private $login = 'root';
    private $pass = '0000';
    protected $connec;

    public function __construct()
    {
        $this->openConnexion();
    }

    private function openConnexion()
    {
        try {
            $bdd = new PDO($this->db, $this->login, $this->pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->connec = $bdd;
            // return $this->connec;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function req($sql, array $param = null)
    {
        $stmt = $this->connec->prepare($sql);
        if ($param) {
            foreach ($param as $key => &$value) {
                $stmt->bindParam($key, $value);
            }
        }
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt = null;
        $this->connec = null;
    }
}

// Usage
// $db = new Database();
// $db->req("SELECT * FROM client");
