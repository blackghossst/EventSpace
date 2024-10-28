<?php
class RCanto extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Rancho del Mar';
        $data ['subtitle'] = 'Las mejores vistas para hacer tus eventos';

    $this -> views -> getView('principal/lugar/RCanto', $data);
    }

}

?>