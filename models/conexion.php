<?php
     class ConexBD
     {
         public function get_conexion()
         {
             if(strtoupper(substr(PHP_OS.0.3))) == "WIN")
             {
                 $user = "admin";
                 $pass = "";
                 $host = "localhost";
                 $bd = "paw";
             }

             else
             {
                $user = "admin";
                $pass = "Admin2021";
                $host = "localhost";
                $bd = "paw";
             }

             $conexion = new PDO("mysql:host=$host;dbname=$bdname;",$user,$pass array(PDO::MYSQL_ATTR_INIT_COMMAD => "SET NAMES utf8"));
             return $conexion;
         }
     }
?>