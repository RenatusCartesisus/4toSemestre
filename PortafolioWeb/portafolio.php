<?php include ("cabecera.php");?>
<?php include ("conexion.php");?>

<?php

if($_POST){
    $descripcion = $_POST['descripcion'];
    $nombre = $_POST['nombre'];

    $fecha = new DateTime();

    $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $imagen_t = $_FILES['archivo']['tmp_name']; 

    move_uploaded_file($imagen_t, "imagenes/".$imagen);

    // print_r($_POST);

$conexion = new Conectar();
$sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
$conexion->ejecutar($sql);
header("location:portafolio.php");
}

// print_r($resultado);------------------------------------------

if($_GET){

// "DELETE FROM proyectos WHERE `proyectos`.`id` = 11"

    $id = $_GET['borrar'];
    $borrar = new Conectar();

    $image = $borrar->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);

    // print_r($image[0]['imagen']);

    unlink("imagenes/".$image[0]['imagen']);

    $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` =".$id; 
    $borrar->ejecutar($sql);
    header("location:portafolio.php");
}
$consultar = new Conectar();
$resultados = $consultar->consultar("SELECT * FROM `proyectos`");

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos
    </div>
    <div class="card-body">

<form action="portafolio.php" method="post" enctype="multipart/form-data">

<label >Nombre del proyecto:</label><input type="text" name="nombre" class="form-control" required> 
<br>
<label >Nombre del archivo:</label><input type="file" name="archivo" class="form-control" required>
<br>
<div class="mb-3">
  <label for="" class="form-label">Detalles</label>
  <textarea class="form-control" name="descripcion" rows="3" required></textarea>
</div>


<input type="submit" value="Enviar datos" class="btn btn-success">

</form>
       
    </div>
</div>
        </div>
        <div class="col-md-6">
        
        <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultados as $resultado){ ?>
            <tr class="">
                <td><?php echo $resultado['id']; ?></td>
                <td><?php echo $resultado['nombre']; ?></td>
                <td>

                    <img width="100px" src="imagenes/<?php echo $resultado['imagen']; ?>" alt="">
    
                </td>
                <td><?php echo $resultado['descripcion'];?></td>
                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $resultado['id']?>"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
            </tr>
            <?php   }   ?>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>

<?php include ("pie.php");?>