<?php
$titulo = "Nueva Materia";
$encabezado = "Nueva Materia";
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
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7 col-sm-offset-2 col-md-offset-3">
                    <form action="materia_procesar.php" method="post" role="form">
                        <fieldset>
                            <h2><?php echo $encabezado; ?></h2>
                            <hr class="colorgraph">
                            <div style="display:none"><input type="text" value="<?php echo 'crear'; ?>" name="operacion"></div>
                            <div class="form-group">
                                <label for="idmateria" class="col-sm-2 control-label">ID Materia</label>
                                <div class="col-sm-10 span4">
                                    <input type="text" class="form-control" id="idmateria" name="idmateria" placeholder="ID Materia" autofocus="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de Materia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion Materia">
                                </div>
                            </div>
                        </fieldset>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-lg-6 col-md-6 col-sm-offset-2">
                                <input type="submit" value="Guardar" name="submit" class="btn btn-success">
                                <button type="reset" onclick="location.href = 'materia_lista.php'" class="btn btn-success col-sm-offset-2">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
