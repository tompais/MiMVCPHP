<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 11/5/2019
 * Time: 11:41
 */

class UsuarioController extends Controller
{
    function usuario()
    {
        require_once ROOT . "Models/Usuario.php";
        $user = new Usuario();
        $d['user'] = $user;
        $this->set($d);
        $this->render(Constantes::USUARIOVIEW);
    }
}