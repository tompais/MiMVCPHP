<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 10/5/2019
 * Time: 21:56
 */

// Base Controller. Todos los controladores deben heredar de este

class Controller
{
    // Nuestro Base Controller tiene una propiedad llamada loader, que es una INSTANCIA de una clase Loader

    protected $loader;


    public function __construct()
    {
        $this->loader = new Loader();
    }


    public function redirect($url, $message, $wait = 0)
    {

        if ($wait == 0)
            header("Location:$url");
        else
            require_once CURR_VIEW_PATH . "message.html";

        exit;

    }
}