<?php
class Reserva extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function verify()
    {
        if (isset($_GET['f_reserva']) && isset($_GET['lugares'])) {

            $f_reserva = strClean($_GET['f_reserva']);
            $lugares = strClean($_GET['lugares']);


            if (empty($f_reserva) || empty($lugares)) {
                header('Location: ' . RUTA_PRINCIPAL . '?respuesta=warning');
            } else {
                $reserva = $this->model->getDisponible($f_reserva, $lugares);
                $data['title'] = ' Reservas';
                $data['subtitle'] = ' Verificar disponibilidad';
                $data['disponible'] = [
                    'f_reserva' => $f_reserva,
                    'lugares' => $lugares,
                ];

                if (empty($reserva)) {
                    $data['mensaje'] = 'DISPONIBLE';
                    $data['tipo'] = 'success';
                } else {
                    $data['mensaje'] = 'NO DISPONIBLE';
                    $data['tipo'] = 'danger';
                }
                $data['lugares'] = $this->model->getlugares();
                $data['lugar'] = $this->model->getlugares($lugares);
                $this->views->getView('principal/reservas', $data);
            }
        }
    }

    public function listar($parametros)
    {
        $array = explode(',', $parametros);
        $f_reserva = (!empty($array[0])) ? $array[0] : null;
        $lugares = (!empty($array[1])) ? $array[1] : null;
        $result = [];

        if ($f_reserva != null && $lugares != null) {
            $reservas = $this->model->getReservasLugares($lugares);
            print_r($reservas);
            exit;
            
            for ($i = 0; $i <  count($reservas); $i++) {
                $datos['id'] = $reservas[$i]['id'];
                $datos['title'] = 'Ocupado';
                $datos['start'] = $reservas[$i]['fecha_reserva'];
                $datos['color'] = '#dc3545';

                array_push($result, $datos);
            }

            $data['id'] = $lugares;
            $data['title'] = 'Comprobando';
            $data['start'] = $f_reserva;
            $data['color'] = '#ffc107';

            array_push($result, $data);
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }

        die();
    }
}
