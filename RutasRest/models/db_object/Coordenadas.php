<?php

class Coordenadas {

    public $id;
    public $CoorLatitud;
    public $CoorLongitud;

    function Coordenadas() {

        $this->id = null;
        $this->CoorLatitud = null;
        $this->CoorLongitud = null;
    }

    //Getter and setter

    function getId() {
	return $this->id;
    }

    function getCoorLatitud() {
	return $this->CoorLatitud;
    }

    function setId($id) {
	$this->id = $id;
    }

    function setCoorLatitud($CoorLatitud) {
	$this->CoorLatitud = $CoorLatitud;
    }

    function getCoorLongitud() {
        return $this->CoorLongitud;
    }

    function setCoorLongitud($CoorLongitud) {
        $this->CoorLongitud = $CoorLongitud;
    }

    //Finish Getter and Setter
}
