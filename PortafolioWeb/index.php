<?php include ("cabecera.php");?>
<?php include ("conexion.php"); ?>
<?php 

$consultar = new Conectar();
$resultados = $consultar->consultar("SELECT * FROM `proyectos`");

?>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div
            class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>Bienvenidos</h2>
            <p>Tu portafolio</p>
            <!-- <button class="btn btn-outline-primary" type="button">Example button</button> -->
        </div>
    </div>
    <div class="col-md-6">
        <div 
            class="h-100 p-5 bg-primary border rounded-3">
            <h2>Este es un portafolio privado</h2>
            <p>Mas informacion...</p>
            <!-- <button class="btn Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                mix and match with additional component themes and more." type="button">Example button</button> -->
        </div>
    </div>
</div>

<style>
    .col-md-6{
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach($resultados as $resultado){?>

    <div class="col">
    <div class="card h-100">
      <img src="imagenes/<?php echo $resultado['imagen'];?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $resultado['nombre'];?></h5>
        <p class="card-text"><?php echo $resultado['descripcion'];?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
</div>
    <?php } ?>
</div>
 
  

    



<?php include ("pie.php");?>