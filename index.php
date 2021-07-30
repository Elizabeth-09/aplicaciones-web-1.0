<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!.. CSS>
    <link rel="stylesheet" href="./public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./public/css/boostrap-theme.css">
    <link real="stylesheet" href="./public/css/estilo.css">

    <!.. JS ..>
    <script src="./public/js/jquery-3.5.1.slim.min.js"></script> 
    <script src="./public/js/jquery-1.9.1.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container.fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="d-none d-sn-none d-md-block">
                <div class="contenlogin">
                    <div class="login">
                    <h3>Bienvenidos/as</h3>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="contenlogin">
                    <div class="login">
                        <form action="./controllers/login.php" method="POST" class="border p-3 formlogin">
                        <div style='margin-botton: 10px;'>
                    <h3>Iniciar Sesion</h3>
                </div>
        </div>
    </div>
<label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-user"></i>
            </span>
            </div>
            <input type="text" name="user" class="form-control" placeholder="Usuario" required="ON">
            </div>

            
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-key"></i>
            </span>
            </div>
            <input type="password" name="passw" class="form-control" placeholder="Contraseña" required="ON">
            </div>

            <div styles="text-aling: center;">
                <button class="btn btn-primary btn-sn" name="acclogin">Ingresar<button>

            </div>

</label>
</body>
</html>