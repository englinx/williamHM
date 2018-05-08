<?php

include_once 'db_object/TipoEvento.php';
include_once 'DAO.php';

class ImplementTipoEvento {
    
    private $tipoEvento;

    public function ImplementTipoEvento() {
	$this->tipoEvento = new TipoEvento();
    }

    function newTipoEvento($nombre, $simbolos, $nivelRiesgo) {
	$auxDao = new DAO();
	$columnas = array("nombre", "simbolos", "nivel_riesgo");
	$valores = array($nombre, $simbolos, $nivelRiesgo);
	$insert = $auxDao->insertar("tipoevento", $columnas, $valores);

	return $insert;
    }
    
    function getAllTipoEventos(){
	$auxDao = new DAO();
	$consulta = $auxDao->consultar("tipoevento", "1", "*", "nombre ASC", "");
	$listaTipoEventos = array();
	$auxDao->close();

	if (!empty($consulta)) {
	    $i = 0;
	    while ($row = $consulta->fetch()) {
		$this->tipoEvento->setId($row['id']);
		$this->tipoEvento->setNivel_riesgo($row['nivel_riesgo']);
		$this->tipoEvento->setNombre($row['nombre']);
		$this->tipoEvento->setSimbolos($row['simbolos']);
		$listaTipoEventos[$i] = get_object_vars($this->tipoEvento);
		$i++;
	    }
	}
	return $listaTipoEventos;
    }
    
    function getTipoEvento($id){
	$auxDao = new DAO();
	$consulta = $auxDao->consultar("tipoevento", "id = " . $id, "*", "nombre ASC", "");
	$listaTipoEventos = array();
	$auxDao->close();

	if (!empty($consulta)) {
	    $i = 0;
	    while ($row = $consulta->fetch()) {
		$this->tipoEvento->setId($row['id']);
		$this->tipoEvento->setNivel_riesgo($row['nivel_riesgo']);
		$this->tipoEvento->setNombre($row['nombre']);
		$this->tipoEvento->setSimbolos($row['simbolos']);
		$listaTipoEventos[$i] = get_object_vars($this->tipoEvento);
		$i++;
	    }
	}
	return $listaTipoEventos;
    }
    
    function deleteTipoEvento($id){
	$auxDao = new DAO();
	$constula = $auxDao->delete("tipoevento", "id = " . $id);
	
	return $consulta;
    }
    
    function updateTipoEvento($id, $valores){
	$auxDao = new DAO();
	$columnas = array("simbolos", "nivel_riesgo");
	$valores = array($simbolos, $nivelRiesgo);
	
	$update = $auxDao->update("tipoevento", $columnas, $valores, "id = " . $id);

	return $update;
    }
    
}
