<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Codeingniter 4</title>
  </head>
  <body>

    <div class="container">
    <h1>CRUD con Codeingniter</h1>
      <div class="row">
        <div class="col-sm-12">
        <form method="post" action="<?php echo base_url().'/index.php/crear'?>">
          <label for="Nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
          <label for="paterno">Apellido paterno</label>
          <input type="text" name="paterno" id="paterno" class="form-control">
          <label for="materno">Apellido materno</label>
          <input type="text" name="materno" id="materno" class="form-control">        
        <br>
        <button class="btn btn-primary form-control">Guardar</button>
        
        
        </form>
        
        </div>
      </div>
      <hr>
    <h2>Listado de personas</h2>
    <?php //print_r($datos);?>
      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
          <table class="table table-hover table-bordered">
          <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>

          <?php foreach($datos as $key): ?>
            <tr>
            <td><?php echo $key->nombre  ?></td>
            <td><?php echo $key->paterno ?></td>
            <td><?php echo $key->materno ?></td>
            <td><a href="<?php echo base_url().'/index.php/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-sm btn-warning">Editar</a></td>
            <td><a href="<?php echo base_url().'/index.php/eliminar/'.$key->id_nombre ?>" class="btn btn-sm btn-danger">Eliminar</a></td>
            </tr>

          <?php endforeach?>
          </table>
          
          </div>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>

    let mensaje = '<?php echo $mensaje;?>';
   
    if(mensaje != ''){
            if (mensaje == '1'){
        swal(':D','Agregado correctamente!','success');
      }else if (mensaje == '0'){
        swal(':(','No se agrego correctamente!!','error');
      }else if(mensaje == '2'){
        swal(':D','Actualizado correctamente!!','success');
      }else if(mensaje == '3'){
        swal(':(','No se actualizo correctamente!!','error');
      }  
    }
   
  </script>
  </body>
</html>