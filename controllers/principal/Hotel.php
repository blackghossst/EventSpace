<?php
class Hotel extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Hotel Mediterraneo';
        $data ['subtitle'] = '';

    $this -> views -> getView('principal/lugar/Hotelmedi' , $data);
    }


}

?>