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

<nav class="navbar p-4 navbar-expand-sm bg-dark navbar-dark p1">
  <div class="container-fluid">
    <header>
      <ul class="navbar-nav">
        <li class="nav-item">
          <bottom class="nav-link active separador" href="php/Create.php">Añadir</bottom>
        </li>
      <li class="nav-item">
          <a class="nav-link active separador" href="php/Read.php">Leer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active separador" href="php/Update.php">Actualizar</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active separador" href="php/Delete.php">Borrar</a>
        </li>
      </ul>
    </header>
  </div>
</nav>  

    <h1>Soy el create</h1>

    <div class= "formCREATE">
        <form action="Create.php" method="POST" onsubmit="return checkFile();" enctype="multipart/form-data">
            <div>
                <div>
                    <input name="nombre" placeholder="Nombre de la Receta" type="text" required>
                </div>
            </div>
            <div>
                <div>
                    <input name="ingredientes" placeholder="Añadir Ingredientes" type="text" required>
                </div>
            </div>
            <div>
                <div>
                    <textarea name="instrucciones" placeholder="Añadir las Instrucciones" cols="40" rows="5" required></textarea>
                </div>
            </div>
            <div>
                <div>
                    <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png" required>
                </div>
            </div>  
            <div>
                <div>
                    <button type="submit">Aceptar</button>
                    <button href="../index.php">Cancelar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>

<!-- Este es propiedad de Oscar -->

<?php
    include_once 'connec.php';
    $Nombre = $_POST['nombre'];
    $Ingredientes = $_POST['ingredientes'];
    $Instrucciones = $_POST['instrucciones'];

    $img_name = $_FILES['fileToUpload']['name'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $directory = $upload_folder.$img_name;

    $upload_folder = "../images/";
    $movefile = move_uploaded_file($tmp_name, $upload_folder.$img_name);


    if (isset($_POST['nombre'])){
        $sqlInput = "INSERT INTO recetas (Nombre, Ingredientes, Instrucciones, Imagen)
        VALUES ('$Nombre', '$Ingredientes', '$Instrucciones', 'images/$directory')";
        mysqli_query($conn, $sqlInput);
        if($movefile){
            echo "Receta agregada con exito";
        }
        else{
            echo "La receta no pudo ser agregada";
        }
    }
    
?>