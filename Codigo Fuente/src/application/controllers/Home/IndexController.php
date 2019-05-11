<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 10/5/2019
 * Time: 23:29
 */

class IndexController extends Controller
{
    public function indexAction(){

        $this->loader->helper("Constantes");

        $userModel = new UserModel(ConstantesHelper::USUARIOTABLA);

        $users = $userModel->getUsers();

        // Cargo template de vista

        include  CURR_VIEW_PATH . "index.html";
    }
}