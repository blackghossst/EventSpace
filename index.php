<?php
require_once 'config/config.php'; 

//VERIFICAR SI EXISTE LA RUTA ADMIN
$isAdmin = strpos($_SERVER['REQUEST_URI'], '/' . ADMIN) !== false;


//COMPROBAR SI EXTISTE GET PARA CREAR URL AMIGABLES
$ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'] ;

//CREAR ARRAY A PARTIR DE LA RUTA
$array = explode('/', $ruta);

//VALIDAR SI ENCONTRAMOS EN LA RUTA ADMIN
if ($isAdmin && (count($array) == 1 
|| (count($array) == 2 && empty ($array[1]))) 
&& $array[0] == ADMIN) {
    
    //CREAR CONTROLADOR
    $controller = 'Admin';
    $metodo = 'login';
} else {

    $indiceUrl = ($isAdmin) ? 1 : 0;
    $controller = ucfirst($array[$indiceUrl]);
    $metodo = 'index';


}

//VALIDAR METODOS
$metodoIndice = ($isAdmin) ? 2 : 1;
if (!empty($array[$metodoIndice]) && $array[$metodoIndice] != '') {
    $metodo = $array[$metodoIndice];
}


//VALIDAR PARAMETROS

$parametro = '';
$parametroIndice = ($isAdmin) ? 3 : 2;
if (!empty($array[$metodoIndice]) && $array[$metodoIndice] != '') {
    for ($i = $parametroIndice; $i < count($array); $i++) { 
        $parametro .= $array[$i] . ',';
    }

    $parametro = trim($parametro, ',');

}

//LLAMAR AL AUTOLOAD

require_once 'config/app/autoload.php';

//validar directorio de controladores

//VALIDAR METODOS
$dirControllers = ($isAdmin) ? 'controllers/admin/' . $controller . '.php' : 'controllers/principal/' . $controller . '.php';

if (file_exists($dirControllers)) {
    require_once $dirControllers;
    $controller = new $controller();

    if (method_exists($controller, $metodo)) {
        $controller->$metodo($parametro);
    } else {
        echo 'EL METODO NO EXISTE';
    }
    
} else {
    'EL CONTROLADOR NO EXISTE';
}

//revisar porque no funciona el metodo listar
?>