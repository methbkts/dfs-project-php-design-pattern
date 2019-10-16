<?php

/*
 * Classe utilitaire permettant de gérer la session
 *
 */
class Session
{

    /**
     *
     * Stocke une donnée en session
     *
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = serialize($value);
        return true;
    }

    /**
     *
     * Récupère une donnée de la sessin
     *
     * @param unknown_type $key
     */
    public static function get($key)
    {
        if (self::check($key)) {
            return unserialize($_SESSION[$key]);
        } else {
            return false;
        }
    }

    /**
     *
     * Vérifie qu’une données est présente en session
     *
     * @param $key
     */
    public static function check($key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     *
     * Supprime une donnée en session
     * @param unknown_type $key
     */
    public static function delete($key)
    {
        if (self::check($key)) {
            unset($_SESSION[$key]);
            return !self::check($key);
        } else {
            return false;
        }
    }

    /**
     *
     * Ajoute un message d’erreur en session
     *
     * @param $message
     * @param $type
     */
    public static function message($message = null, $type = null)
    {

        if (is_null($message) && is_null($type)) {
            return self::get(‘messages’);
        }

        self::set(‘messages’, array($type => $message));
    }
}
