<?php
class PrincipalModel extends Query{


    public function __construct() {
        parent :: __construct();
    }

    //recuperar los sliders
    public function getSliders(){
       return $this -> selectAll("SELECT * FROM  slider");
    }

    //recuperar los lugares
    public function getlugares(){
       return $this -> selectAll("SELECT * FROM  lugares");
    }   
}

?>