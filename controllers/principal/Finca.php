<?php
class Finca extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Finca del Carmen';
        $data ['subtitle'] = '';

    $this -> views -> getView('principal/lugar/finca', $data);
    }

}

?>