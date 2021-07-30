<?php
     session_start();
     include '../models/conexion.php';
     include '../models/login.php';
     include '../models/procesos.php';

     if(isset($_POST['acclogin']))
     {
          echo $user = $_POST['user'];
          echo "<br>";
          echo $passw = $_POST['passw']:
     }

     else 
     {
          header('Location: ../index.php');
          
     }
?>