<!--Agus-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/ImageChecker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <header>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="Create.php">Añadir</a>
        </li>
      <li class="nav-item">
          <a class="nav-link active" href="Read.php">Leer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Update.php">Actualizar</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="Delete.php">Borrar</a>
        </li>
      </ul>
    </header>
  </div>
</nav>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Consulta Registro con AJAX</title>
  <!-- referenciamos al archivo ajax.js donde se encuentra nuestra funcion objetoAjax-->
    <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
    </head>
    <body>
    <p>Consultar registros con ajax</p>"</p>"<p><!-- En "onsubmit" escribimos la función 'MostrarConsulta' que creamos en javascript,
con su parametro que es el archivo que vamos a mostrar, en este caso 'consulta.php'-->
    <form name="consulta" action="" onsubmit="MostrarConsulta('consulta.php'); return false">
  <label>
  <input type="submit" value="Consultar" />
  </label>
  </form>
  <div id="resultado"></div>
  </body>
</html>

<?php
    $nombre_receta =$_REQUEST['nombrereceta']

    $data= array();
    $dbHost='localhost';
    $dbUserName='root';
    $dbPassword='';
    $dbName='taller';

    $db=new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);
    if($db->connect_error)
    {
        die("No hay conexion con la base de datos: ".$db->connect_error);
    }
    $query=$db->query("SELECT * FROM recetas WHERE nombre_receta= $nombrereceta");
    if($query->num_rows>0)
    {
        $recetadata =$query->fetch_assoc();
    }
    else
    {
        $recetadata='';
    }
    echo 
?>
</body>
</html>
