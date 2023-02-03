<?php include ("cabecera.php");?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos
    </div>
    <div class="card-body">

<form action="portafolio.php" method="post">

<label >Nombre del proyecto:</label><input type="text" name="nombre" class="form-control" required> 
<br>
<label >Nombre del archivo:</label><input type="file" name="archivo" class="form-control" required>
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
                <th scope="col">Column 1</th>
                <th scope="col">Column 2</th>
                <th scope="col">Column 3</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>






<?php include ("pie.php");?>