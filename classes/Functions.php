<?php

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
}
