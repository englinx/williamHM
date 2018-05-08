<?php

class TipoHitos {
    
    public $id = null;
    public $nombre = null;
    public $simbolos = null;
    
    function TipoHitos(){
	$this->id = null;
	$this->nombre = null;
	$this->simbolos = null;
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

    function setId($id) {
	$this->id = $id;
    }

    function setNombre($nombre) {
	$this->nombre = $nombre;
    }

    function setSimbolos($simbolos) {
	$this->simbolos = $simbolos;
    }

        //Finish Getter and Setter
    
}
