<?php

include_once 'db_object/Evento.php';
include_once 'ImplementTipoEvento.php';
include_once 'ImplementCoordenadas.php';
include_once 'DAO.php';

Class ImplementEvento {

    private $evento;

    public function ImplementEvento() {
	$this->evento = new Evento();
    }

    public function getAllEventos() {

	$auxDao	    = new DAO();
	$consulta   = $auxDao->consultar("evento", "1", "*", "", "");
	$listaEventos = array();
	$auxDao->close();

	if (!empty($consulta)) {
	    $i = 0;
	    while ($row = $consulta->fetch()) {
		
		$TipoEvento = new ImplementTipoEvento();
		$Coordenada = new ImplementCoordenadas();
		
		$this->evento->setId($row['Id']);
		$this->evento->setPorcen_Riesgo($row['Porcen_Riesgo']);
		$this->evento->setIdCoordenada($Coordenada->getCoordenada($row['idCoordenada']));
		$this->evento->setIdTipo($TipoEvento->getTipoEvento($row['idTipo']));
		$listaEventos[$i] = get_object_vars($this->evento);
		$i++;
	    }
	}
	return $listaEventos;
    }

    public function getEventoById($id) {

	$auxDao	    = new DAO();
	$consulta   = $auxDao->consultar("evento", "Id = " . $id, "*", "", "");
	$listaEventos = array();
	$auxDao->close();

	if (!empty($consulta)) {
	    $i = 0;
	    while ($row = $consulta->fetch()) {
		
		$TipoEvento = new ImplementTipoEvento();
		$Coordenada = new ImplementCoordenadas();
		
		$this->evento->setId($row['Id']);
		$this->evento->setPorcen_Riesgo($row['Porcen_Riesgo']);
		$this->evento->setIdCoordenada($Coordenada->getCoordenada($row['idCoordenada']));
		$this->evento->setIdTipo($TipoEvento->getTipoEvento($row['idTipo']));
		$listaEventos[$i] = get_object_vars($this->evento);
		$i++;
	    }
	}
	return $listaEventos;
    }
    
    function newEvento($porcenRiesgo, $idTipo, $idCoordenada) {
	$auxDao = new DAO();
	$columnas = array("Porcen_Riesgo", "idTipo", "idCoordenada");
	$valores = array($porcenRiesgo, $idTipo, $idCoordenada);
	$insert = $auxDao->insertar("evento", $columnas, $valores);

	return $insert;
    }
    
    function deleteEvento($id){
	$auxDao = new DAO();
	$constula = $auxDao->delete("evento", "id = " . $id);
	
	return $consulta;
    }
}

?>