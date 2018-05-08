<?php

class TipoEvento {
    
    public $id;
    public $nombre;
    public $simbolos;
    public $nivel_riesgo;
    
    function TipoEvento() {
	$this->id = null; 
	$this->nombre = null;
	$this->simbolos = null;
	$this->nivel_riesgo = null;
    }
    
    //Getter and Setter
    function getId() {
	return $this->id;
    }

    function getNombre() {
	return $this->nombre;
    }

    function getSimbolos() {
	return $this->simbolos;
    }

    function getNivel_riesgo() {
	return $this->nivel_riesgo;
    }

    function setId($id) {
	$this->id = $id;
    }

    function setNombre($nombre) {
	$this->nombre = $nombre;
    }

    function setSimbolos($simbolos) {
	$this->simbolos = $simbolos;
    }

    function setNivel_riesgo($nivel_riesgo) {
	$this->nivel_riesgo = $nivel_riesgo;
    }

    //Finish Getter and Setter
    
}
