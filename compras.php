<?php
    session_start();
    //echo "<h1>Bienvenido ".$_SESSION["usuario"]."</h1>";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <select name="producto">
        <option value="galletas">Galletas</option>
        <option value="gaseosa">Gaseosa</option>
        <option value="cereal">Cereal</option>
    </select>
    <input type="number" name="cantidad">
    <input type="text" name="precio">
    <input type="submit" name="submit" value="Guardar">
</form>
<a href="carrito.php">Ver carrito</a>
<?php
if(isset($_POST["submit"])){
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];

    if(!empty($_COOKIE)){
        $cantidad = count($_COOKIE);
    }
    else{
        $cantidad = 0;
    }

    $_SESSION["carrito"]= "$producto + $cantidad + $precio";
    //setcookie("carrito[$cantidad]", "$producto + $cantidad + $precio");

}


