<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Gastos</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertify/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
  </head>

  <body>
    <div class="container">
      <div id="tabla"></div>
    </div>

    <!-- Modal para Registros Nuevos -->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar nuevo gasto</h4>
          </div>
          <div class="modal-body">
            <label>Día</label>
            <input type="text" name="" id="dia" class="form-control input-sm">
            <label>Mes</label>
            <input type="text" name="" id="mes" class="form-control input-sm">
            <label>Monto del Gasto</label>
            <input type="text" name="" id="monto" class="form-control input-sm">
            <label>Descripción del Monto</label>
            <input type="text" name="" id="descripcion" class="form-control input-sm">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
              Agregar
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal para Registros Nuevos -->

    <!-- Modal para Edicion de Datos -->
    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Actualizar registro</h4>
          </div>
          <div class="modal-body">
            <input type="text" hidden="" id="persona" name="">
            <label>Día</label>
            <input type="text" name="" id="diau" class="form-control input-sm">
            <label>Mes</label>
            <input type="text" name="" id="mesu" class="form-control input-sm">
            <label>Monto del Gasto</label>
            <input type="text" name="" id="montou" class="form-control input-sm">
            <label>Descripción del Monto</label>
            <input type="text" name="" id="descripcionu" class="form-control input-sm">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del Modal para Edicion de Datos -->


  </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('#tabla').load('componentes/tablas.php');

    });

</script>