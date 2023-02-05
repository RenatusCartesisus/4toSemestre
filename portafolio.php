<?php include ("cabecera.php");?>
<?php include ("conexion.php");?>

<?php

if($_POST){

    $nombre = $_POST['nombre'];

    print_r($_POST);

$conexion = new Conectar();
$sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', 'Descartes.jpg', 'Pienso, luego existo');";
$conexion->ejecutar($sql);

}

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
<label >Nombre del archivo:</label><input type="file" name="archivo" class="form-control" >
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
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>3</td>
                <td>Aplicacion Web</td>
                <td>Imagen.jpg</td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>

<?php include ("pie.php");?>