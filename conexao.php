<?php

 $server = "localhost";
 $user = "root";
 $pass = "";
 $bd = "biblioteca2";

 if($con = mysqli_connect($server, $user, $pass, $bd)){
    //echo "Conectado";
 } else{
    //echo "Erro!";
 }
