<?php
class ReservaModel extends Query
{


    public function __construct()
    {
        parent::__construct();
    }

    //recuperar los sliders
    public function getSliders()
    {
        return $this->selectAll("SELECT * FROM  slider");
    }

    //recuperar los lugares
    public function getlugares()
    {
        return $this->selectAll("SELECT * FROM  lugares");
    }

    public function getDisponible($f_reserva, $lugares)
    {

        return $this->selectAll("SELECT * FROM reservaciones 
        WHERE fecha_reserva >= '$f_reserva'
        AND id_local = $lugares");
    }

    public function getReservasLugares($lugares)
    {

        return $this->selectAll("SELECT * FROM reservaciones 
        AND id_local = $lugares");
    }
    
    //recuperar los lugares
    public function getlugar($id_lugar)
    {
        return $this->select("SELECT * FROM  lugares WHERE  id = $id_lugar");
    }

}
