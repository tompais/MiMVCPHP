<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 10/5/2019
 * Time: 22:04
 */

class Loader
{

    // Carga las clases de la carpeta librerías

    public function library($lib)
    {
        require_once LIBRARY_FRAMEWORK_PATH . "$lib.php";
    }


    // Cargador de funciones de helper. Los nombres se deben definir de la siguiente manera: DownloadHelper.php;

    public function helper($helper)
    {
        require_once HELPER_PATH . "{$helper}Helper.php";
    }
}