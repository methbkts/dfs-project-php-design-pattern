<?php

/*
 * Personnal functions.
 * 
 */
class Functions
{
    public static function br()
    {
        echo "<br>";
    }

    public static function dd($var = null)
    {
        die('<pre>'. print_r($var, 1) . '</pre>');
    }

    public static function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
}
