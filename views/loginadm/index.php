<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>IngresarAdmins</title>

</head>
<body>
    <?php require 'views/header2.php';?>
    <div>
    <div>
        <div>
            <h1>IngresarAdmin</h1>
        </div>
    </div>
    <div>
        <div>
            <h1><?php echo $this->resultadoLogin; ?></h1>
        </div>
    </div>
        <form action="<?php echo constant('URL'); ?>loginadm/ingresar" method="post">
        <div>
            <label for="exampleInputEmail1" class="form-label">Ingrese CI</label>
            <input type="text"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="CI_adm"
            value="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">ContraseñaAdmin</label>
            <input type="Password_adm"
            class="form-control"
            id="exampleInputPassword1"
            name="Password_adm">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 py-2">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
        <a  href="<?php echo constant('URL'); ?>Regusuario">Registro de Administrador</a>

        </form>
    </div>
    <?php require 'views/footer2.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>