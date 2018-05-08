<?php

Class Ruta {

    public $Id;
    public $Codigo;
    public $idCoordenadaInicio;
    public $idCoordenadaFin;
    public $date;

    function Ruta() {

	$this->id = null;
	$this->Codigo = null;
	$this->idCoordenadaFin = null;
	$this->idCoordenadaInicio = null;
	$this->date = null;    
    }

    //Getter and setter

    function getId() {
	return $this->Id;
    }

    function getCodigo() {
	return $this->Codigo;
    }

    function getIdCoordenadaInicio() {
	return $this->idCoordenadaInicio;
    }

    function getIdCoordenadaFin() {
	return $this->idCoordenadaFin;
    }

    function getDate() {
	return $this->date;
    }

    function setId($Id) {
	$this->Id = $Id;
    }

    function setCodigo($Codigo) {
	$this->Codigo = $Codigo;
    }

    function setIdCoordenadaInicio($idCoordenadaInicio) {
	$this->idCoordenadaInicio = $idCoordenadaInicio;
    }

    function setIdCoordenadaFin($idCoordenadaFin) {
	$this->idCoordenadaFin = $idCoordenadaFin;
    }

    function setDate($date) {
	$this->date = $date;
    }

    
    //Finish Getter and Setter
}

?>