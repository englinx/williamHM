<?php

require_once("SimpleRest.php");
include_once 'models/ImplementEvento.php';

Class EventoRestHandler extends SimpleRest{
    
    public function encodeJson($responseData) {
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;
    }
    
    function getAllEventos() {

        $evento = new ImplementEvento();
        $rawData = $evento->getAllEventos();

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No se encontraron roles!');
        } else {
            $statusCode = 200;
        }    

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }
    
    function getEventoById($id) {

        $evento = new ImplementEvento();
        $rawData = $evento->getEventoById($id);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No se encontraron roles!');
        } else {
            $statusCode = 200;
        }    

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }
    
    function newEvento($porcenRiesgo, $idTipo, $idCoordenada) {

        $evento = new ImplementEvento();
        $rawData = $evento->newEvento($porcenRiesgo, $idTipo, $idCoordenada);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No se encontraron roles!');
        } else {
            $statusCode = 200;
        }    

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }
    
    function deleteEvento($id) {

        $evento = new ImplementEvento();
        $rawData = $evento->newEvento($id);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No se encontraron roles!');
        } else {
            $statusCode = 200;
        }    

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }
    
}

