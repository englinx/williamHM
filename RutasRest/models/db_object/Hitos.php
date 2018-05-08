<?php

class Hitos {
    
    public $id;
    public $nombre;
    public $descripcion;
    public $clasificacion;
    public $idCoordenada;
    public $idTipo;
    
    function Hitos (){
	$this->id = null;
	$this->nombre = null;
	$this->descripcion = null;
	$this->clasificacion = null;
	$this->idCoordenada = null;
	$this->idTipo = null;
    }
    
    //Getter and Setter
    function getId() {
	return $this->id;
    }

    function getNombre() {
	return $this->nombre;
    }

    function getDescripcion() {
	return $this->descripcion;
    }

    function getClasificacion() {
	return $this->clasificacion;
    }

    function getIdCoordenada() {
	return $this->idCoordenada;
    }

    function getIdTipo() {
	return $this->idTipo;
    }

    function setId($id) {
	$this->id = $id;
    }

    function setNombre($nombre) {
	$this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
	$this->descripcion = $descripcion;
    }

    function setClasificacion($clasificacion) {
	$this->clasificacion = $clasificacion;
    }

    function setIdCoordenada($idCoordenada) {
	$this->idCoordenada = $idCoordenada;
    }

    function setIdTipo($idTipo) {
	$this->idTipo = $idTipo;
    }

        //Fin Getter and Setter
    
}
