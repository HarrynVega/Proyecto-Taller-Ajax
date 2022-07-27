<!-- Este es propiedad de Harryn Vega -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
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

    <div class="container">
        <div class="Searchbar">
            <label for="busqueda"></label>
            <input type="search" placeholder="Buscar receta para borrar" class="busqueda" id="busqueda">
            <input type="submit" class="subBorrar" id="subBorrar">
        </div>
        <div class="izquierda">
            <img src="" alt="Imagen de receta" id="ImagenDel">
        </div>
        <div class="derecha">
            <h1 id="Titulo_Delete" class="Titulo">titulo</h1>
            <p id="Ingredientes_Delete" class="Ingredientes">ingredientes</p>
            <p id="Instrucciones_Delete" class="Instrucciones">instrucciones</p>

        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>

