<!doctype html>
<html lang="en">
  <head>

    <?php include "dependencias.php"; ?>
    <title>Primer Menu</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <!--Agregar codigo de otro archivo, para eso agregamos la ruta del que queremos cargar-->
          <div class="col-sm-12">
            <?php 
              include "menu.php"; 
            ?>
          </div>
      </div>
    </div>
  </body>
</html>