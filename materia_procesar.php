<?php

include_once './Materia.php';

$operacion = filter_input(INPUT_POST, 'operacion');

$materia = new Materia();

switch ($operacion) {
    case 'crear':
// Crear Materia

        $materia->setIdmateria(filter_input(INPUT_POST, 'idmateria'));
        $materia->setNombre(filter_input(INPUT_POST, 'nombre'));
        $materia->setDescripcion(filter_input(INPUT_POST, 'descripcion'));
        
        if (isset($materia)) {
            try {
                $materia->agregar($materia);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
            header("Location: materia_lista.php");
        } else {
            echo 'Error al crear materia';
        }

        break;

    case 'editar':
//Editar Materia

        $materia->setIdmateria(filter_input(INPUT_POST, 'idmateria'));
        $materia->setNombre(filter_input(INPUT_POST, 'nombre'));
        $materia->setDescripcion(filter_input(INPUT_POST, 'descripcion'));

        if (isset($materia)) {
            $materia->actualizar($materia);

            header("Location: materia_lista.php");
        }

        break;

    default:
//Eliminar Materia
        
        $materia->setIdmateria(filter_input(INPUT_GET, 'idmateria'));

        if (isset($materia)) {
            $materia->eliminar($materia);

            header("Location: materia_lista.php");
        }
        break;
}
