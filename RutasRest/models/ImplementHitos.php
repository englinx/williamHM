<?php

include_once 'db_object/Usuarios.php';
include_once 'ImplementRoles.php';
include_once 'DAO.php';

Class ImplementUsuario {

    private $usuario;

    public function ImplementUsuario() {
        $this->usuario = new Usuarios();
    }

    public function getAllUsuarios() {

        $auxDao = new DAO();
        $consulta = $auxDao->consultar("usuarios", "Id > 0", "*");
        $listaUsuarios = array();
        $auxDao->close();

        if (!empty($consulta)) {
            $i = 0;
            while ($row = $consulta->fetch()) {

                $rolI = new ImplementRoles();

                $this->usuario->setId($row['Id']);
                $this->usuario->setNombre($row['Nombre']);
                $this->usuario->setEmail($row['Email']);
                $this->usuario->setDisabled($row['Disabled']);
                $this->usuario->setPassword($row['Password']);
                $this->usuario->setId_rol($rolI->getRolById($row['id_rol']));
                $listaUsuarios[$i] = get_object_vars($this->usuario);
                $i++;
            }
        }
        return $listaUsuarios;
    }

    public function getUserById($id) {

        $auxDao = new DAO();
        $consulta = $auxDao->consultar("usuarios", "Id = " . $id, "*");
        $auxDao->close();
        $usuario = false;

        if (!empty($consulta)) {
            while ($row = $consulta->fetch()) {

                $rolI = new ImplementRoles();

                $this->usuario->setId($row['Id']);
                $this->usuario->setNombre($row['Nombre']);
                $this->usuario->setEmail($row['Email']);
                $this->usuario->setDisabled($row['Disabled']);
                $this->usuario->setPassword($row['Password']);
                $this->usuario->setId_rol($rolI->getRolById($row['id_rol']));
                $usuario = get_object_vars($this->usuario);

                break;
            }
        } else {
            return false;
        }

        return $usuario;
    }

    public function getValidateUser($username, $pass) {

        $auxDao = new DAO();
        $consulta = $auxDao->consultar("usuarios", "Email = '" . $username . "' AND Password = '" . $pass . "'", "*");
        $auxDao->close();
        $usuario = false;

        if (!empty($consulta)) {
            while ($row = $consulta->fetch()) {

                $rolI = new ImplementRoles();

                $this->usuario->setId($row['Id']);
                $this->usuario->setNombre($row['Nombre']);
                $this->usuario->setEmail($row['Email']);
                $this->usuario->setDisabled($row['Disabled']);
                $this->usuario->setPassword($row['Password']);
                $this->usuario->setId_rol($rolI->getRolById($row['id_rol']));
                $usuario = get_object_vars($this->usuario);

                break;
            }
        } else {
            return false;
        }

        return $usuario;
    }
    
    public function getValidateEmail($username) {

        $auxDao = new DAO();
        $consulta = $auxDao->consultar("usuarios", "Email = '" . $username . "'", "*");
        $auxDao->close();
        $usuario = false;

        if (!empty($consulta)) {
            while ($row = $consulta->fetch()) {

                $rolI = new ImplementRoles();

                $this->usuario->setId($row['Id']);
                $this->usuario->setNombre($row['Nombre']);
                $this->usuario->setEmail($row['Email']);
                $this->usuario->setDisabled($row['Disabled']);
                $this->usuario->setPassword($row['Password']);
                $this->usuario->setId_rol($rolI->getRolById($row['id_rol']));
                $usuario = get_object_vars($this->usuario);

                break;
            }
        } else {
            return false;
        }

        return $usuario;
    }

    function addUsuario($email, $pass, $nombre, $rol) {

//	if($this->getUserExistente($email) === true){
//	    return 0;
//	}else{
        $DAO = new DAO();
        $query = $DAO->insertar($email, $pass, $nombre, $rol);
        $DAO->close();

        return $query;
//	}
    }

    function getUserExistente($email) {

        $auxDao = new DAO();
        $consulta = $auxDao->consultar("usuarios", "Email = " . $email, "*");
        $auxDao->close();

        if (!empty($consulta)) {

            if ($consulta->fetch() === false) {
                return false;
            } else {
                return true;
            }
        } else {
            return true;
        }
    }

    function editUsuario($id, $pass, $nombre, $rol) {

        $DAO = new DAO();
	if(!empty($pass)){
	    $pass = "Password ='$pass', ";
	}
        $query = $DAO->update('usuarios', $pass . " Nombre ='$nombre', id_rol='$rol'", "Id = $id");
        $DAO->close();
        return $query;
    }

    function editContraseña($email, $pass) {
        $DAO = new DAO();
        $query = $DAO->update('usuarios', "Password ='$pass'", "Email='$email'");
        $DAO->close();
        return $query;
    }

    function deletUsuario($id) {

        $DAO = new DAO();
        $query = $DAO->delete('usuarios', "Id = $id");
        $DAO->close();

        return $query;
    }

}

?>