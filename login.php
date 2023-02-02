<?php
session_start();
if($_POST){

    if($_POST['usuario']=="develoteca" && ($_POST['password']=="123")){

        $_SESSION['usuario']=true;

        // echo 'Logueado, ok'; 
        header("location:index.php");
    }
    else{
        echo "<script> alert('Usuario o contraseña incorrectos.')</script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container">

    <div class="row">
  
    <div class="col-md-4">

</div>
    <div class="col-md-4">

    <div class="card">
        <div class="card-header">
           Iniciar sesion
        </div>
        <div class="card-body">

        <form action="" method="post">
    
    <label for="">Usuario:</label> <input type="text" name="usuario" class="form-control" required>
    <br>
    <label for="">Contraseña:</label><input type="password" name="password" class="form-control" required> 
    <br>
    
    <button class="btn btn-success">Entrar al portafolio</button>
           
        </div>
        <div class="card-footer text-muted">
        Copyright © Todos los derechos reservados
        </div>
    </div>
    
    
    </form>
    </div>
    <div class="col-md-4">

    </div>
</div>

</div>

<style>
    .container{
        margin-top: 60px;
    }
</style>

    
</body>
</html>