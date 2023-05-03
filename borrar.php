<?php 
$conex = mysqli_connect("localhost","cliente","","cliente");

$id=$_POST['id'];

echo $id;

mysqli_query($conex,"DELETE from cliente where id_cliente='$id'");
?>
