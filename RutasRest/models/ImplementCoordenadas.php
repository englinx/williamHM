<?php

include_once 'db_object/Coordenadas.php';
include_once 'DAO.php';

class ImplementCoordenadas {

    private $coordenada;

    public function ImplementCoordenadas() {
	$this->coordenada = new Coordenadas();
    }

    function newCoordenada($CoorLatitud, $CoorLongitud) {
	$auxDao = new DAO();
	$columnas = array("CoorLatitud", "CoorLongitud");
	$valores = array($CoorLatitud, $CoorLongitud);
	$insert = $auxDao->insertar("coordenadas", $columnas, $valores);

	return $insert;
    }

    function getCoordenada($id) {
	$auxDao = new DAO();
	$consulta = $auxDao->consultar("coordenadas", "id = " . $id, "*", "", "");
	$listaCoordenadas = array();
	$auxDao->close();

	if (!empty($consulta)) {
	    $i = 0;
	    while ($row = $consulta->fetch()) {
		$this->coordenada->setCoorLatitud($row['CoorLatitud']);
		$this->coordenada->setCoorLongitud($row['CoorLongitud']);
		$listaCoordenadas[$i] = get_object_vars($this->coordenada);
		$i++;
	    }
	}
	return $listaCoordenadas;
    }
    
    function deleteCoordenada($id){
	$auxDao = new DAO();
	$constula = $auxDao->delete("coordenadas", "id = " . $id);
	
	return $consulta;
    }

}
