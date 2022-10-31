<?php
    include("conexion_bd.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
</style> 

<body>
    <h1>Formulario Beta</h1>
    <form name="formularioDatos" method="post" action="Consulta.php"
        <table>
            <tr><
                <th colspn="5"><h1>Alumnos</h1></th>
            </tr>
            <tr>
                <td>
                    <label>Numero de control</label>
                    <input type="text" name="control">
                </td>
                <td>
                    <input type="submit" name="enviar" value="buscar">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(empty($_POST['control'])){
        //echo "<script language='Javascript'>
            //alert('Ingresa el numero de control del alumno');
            //location.assign('index.php');
            //  </script>";
            
    }
    ?>
</body>
</html>       