<?php
class Jardin extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Jardin Romantico';
        $data ['subtitle'] = 'Las mejores vistas para hacer tus eventos';

    $this -> views -> getView('principal/lugar/jardin', $data);
    }

}

?>