<?php

/*
 * Represents a connection between PHP and a database server. 
 *
 * Usage:
 * 
 * $db = new Database;
 * $sql = "SELECT * FROM products;";
 * $result = $db->req($sql);
 * return $result[0];
 * 
 */
class Database
{
    /**
     * @var string
     * @access private
     */
    private $db = 'mysql:host=localhost;dbname=app_db';

    /**
     * @var string
     * @access private
     */
    private $login = 'root';

    /**
     * @var string
     * @access private
     */
    private $pass = '0000';

    /**
     * @var PDO
     * @access protected
     */
    protected $connec;


    /**
     * Class Constructor
     *
     * @param void
     * @return void
     */
    public function __construct()
    {
        $this->openConnexion();
    }

    /**
     * Method that open a connexion to the Database
     *
     * @param void
     * @return void
     */
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

    /**
     * Method that prepare a request, 
     * execute it from the Database 
     * then fetch the result and return it
     * 
     * @param string $sql
     * @param array $param
     * @return array
     */
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