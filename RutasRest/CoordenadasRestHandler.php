<?php

require_once("SimpleRest.php");
include_once 'models/ImplementCoordenadas.php';

Class CoordenadasRestHandler extends SimpleRest {
    
     public function encodeJson($responseData) {
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;
    }

    function newCoordenada($CoorLatitud, $CoorLongitud){

        $coordenada = new ImplementCoordenadas();
        $rawData = $coordenada->newCoordenada($CoorLatitud, $CoorLongitud);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No users found!');
        } else {
            $statusCode = 200;
        }

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }
    
    function getCoordenada($id){

        $coordenada = new ImplementCoordenadas();
        $rawData = $coordenada->getCoordenada($id);

	if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No users found!');
	    $response = $this->encodeJson($rawData);
            echo $response;
        } else {
            $statusCode = 200;
        }

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }
    
    function deleteCoordenada($id){

        $coordenada = new ImplementCoordenadas();
        $rawData = $coordenada->deleteCoordenada($id);

	if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No users found!');
	    $response = $this->encodeJson($rawData);
            echo $response;
        } else {
            $statusCode = 200;
        }

        if ($statusCode === 200) {
            $response = $this->encodeJson($rawData);
            echo $response;
        }
    }

}
