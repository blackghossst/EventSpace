<?php
class Lugar extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Lugares';
        $data ['subtitle'] = 'Las mejores vistas para hacer tus eventos';

    $this -> views -> getView('principal/lugar/Hotelmedi' , $data);
    }


}

?>