<?php

use LDAP\Result;

class Query extends Conexion{
    private $con, $pdo;

    public function __construct( ) {
        $this-> con = new Conexion();
        $this-> pdo = $this->con->Conectar();
    }

    //recuperar un solo resgistro
    public function select($sql){
    $result = $this->pdo->prepare($sql);
    $result -> execute();
    return $result -> fetch(PDO::FETCH_ASSOC);
    }

    //recuperar todos los resgistros
    public function selectAll($sql){
        $result = $this->pdo->prepare($sql);
        $result -> execute();
        return $result -> fetchAll(PDO::FETCH_ASSOC);
        }

            //REGRISTRAR
    public function insert($sql, $array){
        $result = $this->pdo->prepare($sql);
        $data = $result -> execute($array);
        if ($data) {
            $res = $this -> pdo -> lastInsertId();
        }else {
            $res = 0;
        }

        return $res;
        }

                    //MODIFICAR O ELIMIAR
    public function save($sql, $array){
        $result = $this->pdo->prepare($sql);
        $data = $result -> execute($array);
        if ($data) {
            $res = 1;
        }else {
            $res = 0;
        }

        return $res;
        }
}

?>