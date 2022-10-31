<!Doctype html>
<html lang="es">
    <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatile" content="ie=edge">
<title>Formulario Proyecto</title>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<form name="formularioDatos" method="post" action="DatosConexionFormP.php"
    <div class="container">
		<div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <br>
                <center><h2>Registro de Datos del Alumno</h2></center><br/>
                   <div>
         <form name="formularioDatos" method="post" action="DatosConexionFormP.php"
         <label for="names">Numero de Control:</label>
         <input type="text" id="ncontrol" name="ncontrol" ></label><br><br>
         <td>Nombre del Alumno:</td>
         <td><input type="text" name="nombre" id="nombre" required /></td> <br/><br/>
        <td>Introduzca Grupo:</td> 
        <td><select name="grupo" id="grupo">
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
        <td>Acta de Recepcion Profesional:</td> <br/>
         <td><select name="acta" id="acta">
          <br/> 
          <option selected="selected"></option>
          <option>Si</option>
          <option>No</option>
          <option>Incompleto</option>
        </select></td>
        <br/> <br/>
        <td>Constancia de Acreditacio SS:</td> <br/>
         <td><select name="CAss" id="CAss">
          <br/>
          <option selected="selected"></option>
          <option>Si</option>
          <option>No</option>
          <option>Incompleto</option>
        </select></td>
          <br/> <br/>
          <td>Liberacion S.S:</td> <br/>
         <td><select name="Lss" id="Lss">
          <br/> <br/>
          <option selected="selected"></option>
          <option>Si</option>
          <option>No</option>
          <option>Incompleto</option>
        </select></td>
        <br/> <br/>
        <td>Liberacion P.P:</td> <br/>
         <td><select name="LiberaPP" id="LiberaPP">
          <br/> <br/>
          <option selected="selected"></option>
          <option>Si</option>
          <option>No</option>
          <option>Incompleto</option>
        </select></td>
        <br/></br/>
        <td>Servicio Social:</td> <br/>
         <td><select name="ServicioS" id="ServicioS">
          <br/> <br/>
          <option selected="selected"></option>
          <option>Si</option>
          <option>No</option>
          <option>Incompleto</option>
        </select></td>
        <br/> <br/>
        <td>Practicas Profesionales:</td> <br/>
         <td><select name="PractP" id="PractP">
          <br/> <br/>
          <option selected="selected"></option>
          <option>Si</option>
          <option>No</option>
          <option>Incompleto</option>
        </select></td>
       <br/> <br/>
       <td>Titulación:</td>
         <td><input type="text" name="titulo" id="titulo" required /></td> <br/><br/>
         <td class="centrado" colspan="2"><input type="submit" value="Enviar Datos" />
          
           <input type="reset" value="Restablecer" /></td>
       </tr>
    </form>

</div>
        </div>
    </div>
    </div>
    <?php  
// Desarrolla aplicaciones Web con conexión a bases de datos 
// Grupo: 5 "K" 
// Maestra:I.S.C. Lorena Santana Martínez 
// Nombre del Alumno:  Fernanda Perera Mendoza
?> 
    </body>
    </html>