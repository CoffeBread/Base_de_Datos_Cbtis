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

<body>
   <center> <h1>Alumnos Generacion 1996-1999</h1> </center>
    <form name="formularioDatos" method="post" action="Consulta.php"
        <table>
            <tr>
                <th colspn="5"><h1>Elige una Opcion:</h1></th>
            </tr>
            <tr>
                <td>
                    <label>Numero de control</label>
                    <input type="text" name="control" required>
                </td>
                <td>
                    <input type="submit" name="enviar" value="buscar">
                </td>
            </tr>
        </table>
        <br/> <br/>
        <td>Introduzca Grupo:</td> 
        <td><select name="grupo" id="grupo" required>
          <br/> <br/>
          <option selected="selected"></option>
          <option>6a</option>
          <option>6b</option>
          <option>6c</option>
          <option>6d</option>
          <option>6e</option>
          <option>6f</option>
          <option>6g</option>
          <option>6h</option>
          <option>6i</option>
          <option>6j</option>
          <option>6k</option>
        </select></td>
        <br><br>
    </form>
    <button onclick="location.href='Index.php'">Regresar al menu Principal</button>
</body>
</html>       