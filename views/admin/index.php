<?php 
    session_start();
    include '../../controllers/redireccionar.php';
    $user = $_SESSION["user"];
    // Instanciar Objeto para redireccionar

    $redic = new Rd();
    $redic->Admin();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminitrador</title>
     <!-- CSS -->
     <link rel="stylesheet" href="./public/css/bootstrap.min.css">
	    <link rel="stylesheet" href="./public/css/bootstrap-theme.css">
        <link rel="stylesheet" href="./public/css/estilo.css">
        <!-- JS -->
        <script src="./public/js/jquery-3.5.1.slim.min.js"></script>
        <script src="./public/js/jquery-1.9.1.min.js"></script>
        <script src="./public/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous">
        crossorigin="anonymous"></script>
        <script src="../../public/js/funciones-navar.js"></script>
    </head>
<body>
    
    <h3><b>Bienvenido/a: <?php echo $user; ?> </b></h3>
</body>
</html>