<?php

Class Evento {

    public $id;
    public $Porcen_Riesgo;
    public $idTipo;
    public $idCoordenada;

    function Evento() {

	$this->id = null;
	$this->Porcen_Riesgo = null;
	$this->idTipo = null;
	$this->idCoordenada = null;
    }

    //Getter and setter
    function getId() {
	return $this->id;
    }

    function getPorcen_Riesgo() {
	return $this->Porcen_Riesgo;
    }

    function getIdTipo() {
	return $this->idTipo;
    }

    function getIdCoordenada() {
	return $this->idCoordenada;
    }

    function setId($id) {
	$this->id = $id;
    }

    function setPorcen_Riesgo($Porcen_Riesgo) {
	$this->Porcen_Riesgo = $Porcen_Riesgo;
    }

    function setIdTipo($idTipo) {
	$this->idTipo = $idTipo;
    }

    function setIdCoordenada($idCoordenada) {
	$this->idCoordenada = $idCoordenada;
    }

        //Finish Getter and Setter
}

?>