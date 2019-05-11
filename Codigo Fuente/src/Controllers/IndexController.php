<?php
class IndexController extends Controller
{
    function index()
    {
        $this->render(Constantes::INDEXVIEW);
    }
}
?>