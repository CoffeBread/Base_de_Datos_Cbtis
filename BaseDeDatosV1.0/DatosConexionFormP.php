<!DOCTYPE html>
<head>
		<title>DATOS FORMULARIO PROYECTO</title>
</head>
	<body>
<style>
	 body{
        position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-image: linear-gradient(rgba(0, 0, 0, 0.445), rgba(0, 0, 0, 0.445)),url("https://th.bing.com/th/id/OIP.Xjc4tSy6HUYJr9GrJjqLggHaEo?pid=ImgDet&rs=1");
    background-size: cover;
color:white;
    }
    .box {
    width: 600px;
    padding: 70px;
    top: 10%;
    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
    text-align: center;
    box-shadow: 0 0 20px #00000060;
    margin:0 auto;
    }
.logo{
    width: 100px;
    height:100px 
}
</style>
</head>
    <body>
    <form class="box" action="DatosConexionFormP.php" method="post">
    <center><img src="https://dgetichihuahua.gob.mx/images/Logos/Imagotipo_DGETI_ok.png" class="logo"></center>
    <h1> <center>Verificacion de datos</center> </h1>
<?php 
require('Conexion.php');      //Manda llamar el programa  de CONEXION DEL FORMULARIO CON UNA BASE DE DATOS 
	// Desarrolla aplicaciones Web con conexión a bases de datos
	// Grupo: 5 "K"
	// Maestra:I.S.C. Lorena Santana Martínez
	// Nombre del Alumno:____________________
    //Ejemplo de FORMULARIOS utilizando diferentes tipos de controles
       $Vncontrol = $_POST['ncontrol'];
	   $Vnombre = $_POST['nombre'];
       $Vgrupo = $_POST['grupo'];
	   $Vacta = $_POST['acta'];
	   $VCAss = $_POST['CAss'];
       $VLss = $_POST['Lss'];
	   $VLiberaPP = $_POST['LiberaPP'];
       $VServicioS = $_POST['ServicioS'];
	   $VPractP = $_POST['PractP'];
       $Vtitulo = $_POST['titulo'];
	
	// Envia la informacion de los datos a la Base de Datos	
     $query = "INSERT INTO $Vgrupo (`ncontrol`,`nombre`,`grupo`,`acta`,`CAss`, `Lss`,`LiberaPP`,`ServicioS`,`PractP`,`titulo`) values ('$Vncontrol','$Vnombre','$Vgrupo','$Vacta','$VCAss','$VLss','$VLiberaPP','$VServicioS','$VPractP','$Vtitulo')";
	 $resultado=$mysqli->query($query);		
    $Vncontrol = $_POST['ncontrol'];
	   echo "<br/> &nbsp; El numero de control es: ". $Vncontrol;
	   echo "<br>";
    $Vnombre = $_POST['nombre'];
	   echo "<br/> &nbsp; El nombre del alumno es: ". $Vnombre;
	   echo "<br>";
    $Vgrupo = $_POST['grupo'];
	   echo "<br/> &nbsp; El grupo es: ". $Vgrupo;
	   echo "<br><br>";
    $Vacta = $_POST['acta'];
	   echo "<br/> &nbsp; Acta de Recepcion: ". $Vacta;
	   echo "<br>";
    $VCAss = $_POST['CAss'];
	  echo "<br/> &nbsp; Constancia de Acreditacion S.S: ". $VCAss;
	   echo "<br>";
    $VLss = $_POST['Lss'];
       echo "<br/> &nbsp; Liberacion S.S: ". $VLss;
	   echo "<br>";
    $VLiberaPP = $_POST['LiberaPP'];
       echo "<br/> &nbsp; Liberacion P.P: ". $VLiberaPP ;
	   echo "<br>";
     $VServicioS = $_POST['ServicioS'];
	   echo "<br/> &nbsp; Servicio Social: ". $VServicioS;
	   echo "<br>";
    $VPractP = $_POST['PractP'];
       echo "<br/> &nbsp; Practicas Profesionales: ". $VPractP;
	   echo "<br>";
    $Vtitulo = $_POST['titulo'];
       echo "<br/> &nbsp; Al alumno le corresponde una titulacion por: ". $Vtitulo;
	   echo "<br>";
	 
	
?>

<button onclick="location.href='Index.php'">Regresar al menu Principal</button>
</form>