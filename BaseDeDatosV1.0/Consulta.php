<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "generacion99-96";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Vncontrol = $_POST['control'];
$Vgrupo = $_POST['grupo'];

$sql = "SELECT * FROM $Vgrupo WHERE ncontrol='$Vncontrol'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
   echo "<p>"."<center>"."<br> Numero control: ". $row["ncontrol"]. "<br> - Nombre: ". $row["nombre"]. "<br> Grupo- " . $row["grupo"] . "<br> ACTA DE RECEPCION PROFESIONAL -". $row["acta"]."<br> -CONSTANCIA DE ACREDITACION SS ". $row["CAss"]."<br> -LIBERACION  S.S ". $row["Lss"]. "<br> -LIBERACION P.P: ". $row["LiberaPP"]."<br> - SERVICIO SOCIAL: ". $row["ServicioS"]."<br> -PRACTICAS PROFESIONALES: ". $row["PractP"]."<br> -TITULACION: ". $row["titulo"]. "</p>"."</center>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<button onclick="location.href='Index.php'">Regresar al menu Principal</button>
</body>
</html>