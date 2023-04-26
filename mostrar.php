<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$inc=include("con_db.php");
if ($inc){
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        while ($row = $resultado->fetch_array()){
            $apellido = $row['apellido'];
            $clave = $row['clave'];
            $edad = $row['edad'];
            ?>
            <div>
                <h2>Apellido:<?php echo $apellido;?></h2>
                <div>
                <p>
        			<b>Clave: </b> <?php echo $clave ?><br>
        		    <b>Edad: </b> <?php echo $edad ?><br>
        		    
        		</p>
                </div>
            </div>
            <?php
        }
    }

}
?>
</body>
</html>
