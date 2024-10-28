<?php
class Terraza extends Controller{

    public function __construct(){
        parent :: __construct();
    }


    public function index(){
        $data ['title'] = ' Terraza Valencia';
        $data ['subtitle'] = '';

    $this -> views -> getView('principal/lugar/Terraza', $data);
    }

}

?>