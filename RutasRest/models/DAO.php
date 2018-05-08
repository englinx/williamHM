<?php

include 'DataBase.php';

class DAO {

    private $connection;

    function DAO() {
        $DAO = new DataBase();
        $this->connection = $DAO->conectar();
    }

    function insertar($tabla, $columnas = array(), $valores = array()) {
	
	
	if(is_array($columnas) && is_array($valores) && count($columnas) == count($valores)){
	    
	    $columna = "(";
	    $valor = "(";
	    
	    foreach($columnas AS $array => $value){
		$columna .= $value . ",";
	    }
	    $columna = substr($columna, 0, -1);
	    $columna = $columna . ")";
	    
	    foreach($valores AS $array => $value){
		$valor .= "'" . $value . "',";
	    }
	    $valor = substr($valor, 0, -1);
	    $valor = $valor . ")";
	    
	    $sentencia = $this->connection->prepare("INSERT INTO " . $tabla . " " . $columna . " VALUES " . $valor);
	    $sentencia->execute();
	    return $sentencia;
	}else{
	    return false;
	}
	
       
    }

    function consultar($nombreTabla, $condicionales, $select, $order = "", $inner = "") {

        $consulta = "SELECT " . $select . " FROM " . $nombreTabla . " " . $inner . " WHERE " . $condicionales . " ";
        if ($order != "") {
            $consulta .= ' ORDER BY ' . $order;
        }
        $result = $this->connection->query($consulta);
        return $result;
    }

    function update($nombreTabla, $fields = array(), $valores = array(), $condicionales) {
	
	$updates = "";
	
	if(is_array($fields) && is_array($valores) && count($fields) == count($valores)){
	    foreach($valores AS $key => $value){
		$updates .= $fields[$key] . " = '" . $value . "'";
		$updates .= ",";
	    }
	    $updates = substr($updates, 0, -1);
	}
	
        $sentencia2 = $this->connection->prepare("UPDATE  $nombreTabla SET " . $updates . " WHERE " . $condicionales);
        $sentencia2->execute();
        $sentencia2->fetch();
        //mysql_query("UPDATE  $nombreTabla SET " . $fields . " WHERE " . $condicionales)or die(mysql_error());
    }

    function delete($tabla, $condicionales) {
        $borrar = "DELETE FROM $tabla WHERE " . $condicionales;
        $sentencia2 = $this->connection->prepare($borrar);
        $sentencia2->execute();
        $sentencia2->fetch();
    }

    function close() {//Close conection data base
        $this->connection = null;
    }

}
