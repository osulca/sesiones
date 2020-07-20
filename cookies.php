<?php
// Cookies
// inicializar cookies
setcookie("Prueba[0]", "Hola Mundo");
setcookie("Prueba[1]", "Adios Mundo");
setcookie("Prueba[2]", "otro Mensaje");
setcookie("Prueba['usuario']", "Omar Sulca", time()+2419200);

for($i=0; $i<count($_COOKIE["Prueba"]); $i++){
    setcookie("Prueba[$i]", "otro Mensaje", time()-60);
}