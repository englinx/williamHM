<?php

require_once("CoordenadasRestHandler.php");

/* Controls the RESTful services URL mapping */

$view = "";
if (isset($_GET["view"]))
    $view = $_GET["view"];


switch ($view) {

    case "newCoordenada":

        $RestHandler = new CoordenadasRestHandler();
        $RestHandler->newCoordenada($_GET['latitud'], $_GET['longitud']);

        break;

    case "getCoordenada":

        $RestHandler = new CoordenadasRestHandler();
        $RestHandler->getCoordenada($_GET['id']);

        break;

    case "deleteCoordenada":

        $RestHandler = new CoordenadasRestHandler();
        $RestHandler->deleteCoordenada($_GET['id']);

        break;
    
    case "getAllEventos":

        $RestHandler = new EventoRestHandler();
        $RestHandler->getAllEventos();

        break;
    
    case "getEventoById":

        $RestHandler = new EventoRestHandler();
        $RestHandler->getEventoById($_GET['id']);

        break;
    
    case "newEvento":

        $RestHandler = new EventoRestHandler();
        $RestHandler->newEvento($_GET['porcenRiesgo'], $_GET['idTipo'], $_GET['idCoordenada']);

        break;

    default://metodo NO soportado
        echo 'METODO NO SOPORTADO';
        break;
}
?>
