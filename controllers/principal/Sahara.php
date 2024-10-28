<?php
class Sahara extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Hotel Sahars';
        $data ['subtitle'] = 'Las mejores vistas para hacer tus eventos';

    $this -> views -> getView('principal/lugar/sahara', $data);
    }

}

?>