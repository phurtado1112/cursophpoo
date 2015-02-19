<?php
require_once './Materia.php';

$titulo = "Lista Materias";
$encabezado = "Listado de Materias";

$mater = new Materia();

$materias = $mater->lista();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <?php include_once './menu.php'; ?>
        <?php include_once './encabezado.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="span3 well-sm"></div>
                <div class="span3 well">
                    <div class="navbar navbar-inner block-header">
                        <a href="materia_crear.php" class="btn btn-success">Crear Nueva Materia</a>
                    </div>
                    <div class="block-content collapse in">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acción</th>
                            </tr>
                            <?php
                            foreach ($materias as $mat) {
                                $id = $mat['idmateria'];
                                echo"
                        <tr>
                        <td>" . $mat['idmateria'] . "</td>
                        <td>" . $mat['nombre'] . "</td>
                        <td>" . $mat['descripcion'] . "</td>
                        <td>" . '<a href="materia_editar.php?idmateria=' . $id . '">Editar</a> -- <a href="materia_procesar.php?idmateria=' . $id . '">Eliminar</a>' . "</td>
                        </tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
