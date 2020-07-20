<?php
// $prueba = $_COOKIE["Prueba"];
// echo $prueba[0];

session_start();
echo "<h1>Bienvenido ".$_SESSION["usuario"]."</h1>";

session_destroy();
session_unset();
