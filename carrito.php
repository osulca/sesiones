<?php
session_start();
$carrito = $_SESSION["carrito"];
//$carrito = $_COOKIE["carrito"];

//foreach($carrito as $producto){
$producto1 = explode(" + ", $carrito);
echo "Producto: ".$producto1[0]."<br>".
     "Cantidad: ".$producto1[1]."<br>".
     "Precio: ".$producto1[2]."<br>";
//}