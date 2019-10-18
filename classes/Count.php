<?php

/*
 * Classe illustrant l'utilisation du design patern Singleton
 *
 */
class Count
{

  /**
   * @var Count
   * @access private
   * @static
   */
  private static $_instance = null;

  /**
   * Constructeur de la classe
   *
   * @param void
   * @return void
   */
  private function __construct()
  { }

  /**
   * Méthode qui crée l'unique instance de la classe
   * si elle n'existe pas encore puis la retourne.
   *
   * @param void
   * @return Count
   */
  public static function getInstance()
  {

    if (is_null(self::$_instance)) {
      self::$_instance = new Count();
    }

    return self::$_instance;
  }

  /**
   * Method that count products from the Database then returns them
   *
   * @param void
   * @return int
   */
  public static function countProducts()
  {
    $db = new Database;
    $sql = "SELECT COUNT(id) FROM products;";
    $result = $db->req($sql);
    return $result[0];
  }

  /**
   * Method that count farmers from the Database then returns them
   *
   * @param void
   * @return int
   */
  public static function countFarmers()
  {
    $db = new Database;
    $sql = "SELECT COUNT(id) FROM farmers;";
    $result = $db->req($sql);
    return $result[0];
  }


  /**
   * Method that count farmers from the Database then returns them
   *
   * @param void
   * @return int
   */
  public static function countTypes()
  {
    $db = new Database;
    $sql = "SELECT COUNT(id) FROM types;";
    $result = $db->req($sql);
    return $result[0];
  }
}
