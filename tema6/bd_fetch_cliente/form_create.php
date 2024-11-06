<?php 
include 'conexion.php';
$sql="SELECT id,numero_mesa FROM mesa";
$resultado=$con->query($sql);

?>

    <form action="javascript:crear()" method="post" enctype="multipart/form-data" id="formulario">
    <div class="mb-3">
    <label for="fotografia" class="form-label">Fotografia</label>
    <input class="form-control" type="file" id="fotografia" name="fotografia">
    </div>
    
    <div class="row">
    <div class="col-lg-7 col-12 mb-3">
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombres" placeholder="nombres">
    </div>
    <div class="col-lg-5 col-12 mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" placeholder="apellidos">
    </div>
    
    </div>
    <div class="row">
        <div class="col-3">
        <label class="form-label" for="carnet">Carnet</label>
        <input class="form-control" type="text" name="carnet" id="carnet"><br>
        </div>
    </div>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="sexo" id="sexo_m">
  <label class="form-check-label" for="flexRadioDefault1">
    Masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sexo" id="sexo_f" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Femenino
  </label>
</div>
</div>




        <label class="form-label" for="fecha_nacimiento">Fecha de nacimiento</label>
        <input class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br>
        <label class="form-label" for="direccion">Direccion</label>
        <input class="form-control" type="text" name="direccion" id="direccion"><br>
        <div class="row">
        <div class="col-4">
        <label for="mesa_id">Mesa</label>
        
        <select class="form-select" aria-label="Valor por Defecto" name="mesa_id" id="mesa_id">
        <?php while($fila=$resultado->fetch_assoc()) 
    {?>
            <option value="<?php echo $fila['id']; ?>"><?php echo $fila['numero_mesa'];?></option>
            <?php }
            ?>
        </select>

        </div>

        </div>
        
        <input class="btn btn-outline-primary" type="submit" value="Enviar">
    </form>
