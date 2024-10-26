<?php
class Servicio extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Servicio';
        $data ['subtitle'] = ' Nuestros Servicio';
    $this -> views -> getView('principal/servicio/index' , $data);
    }


}

?>