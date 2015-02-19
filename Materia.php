<?php

require_once './ConexionMySQL.php';


class Materia {

    private $idmateria;
    private $nombre;
    private $descripcion;

    function __construct() {
        
    }

    public function getIdmateria() {
        return $this->idmateria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setIdmateria($idmateria) {
        $this->idmateria = $idmateria;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function lista() {
        $conecta = ConexionMySQL::open();
        try {
            $consulta_materia = "SELECT * FROM materia";
            $lista_materias = $conecta->query($consulta_materia);
            while ($fila_materias = $lista_materias->fetch_array(MYSQLI_ASSOC)) {
                $this->materias[] = $fila_materias;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        $conecta->close();
        return $this->materias;
    }

    public function agregar($materia) {
        $conecta = ConexionMySQL::open();
        try {
            $consulta_agregar_materia = ("INSERT INTO materia (idmateria,nombre,descripcion) values('$materia->idmateria','$materia->nombre','$materia->descripcion')");
            $conecta->query($consulta_agregar_materia);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        $conecta->close();
    }

    public function actualizar($materia) {
        $conecta = ConexionMySQL::open();
        try {
            $consulta_actualizar_materia = "UPDATE materia SET nombre='$materia->nombre',descripcion='$materia->descripcion' WHERE idmateria='$materia->idmateria'";
            $conecta->query($consulta_actualizar_materia);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function eliminar($materia) {
        $conecta = ConexionMySQL::open();
        try {
            $consulta_elimina_materia = "DELETE FROM materia WHERE idmateria = '$materia->idmateria'";
            $conecta->query($consulta_elimina_materia);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function obtener_materia_por_id($idmateria) {
        $conecta = ConexionMySQL::open();
        try {
            $consulta_materia = "SELECT * FROM materia where idmateria = '" . $idmateria . "'";
            $lista_materia = $conecta->query($consulta_materia);
            while ($fila = $lista_materia->fetch_array(MYSQLI_ASSOC)) {
            $this->materia = $fila;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $this->materia;
    }

}
