<!-- Este es propiedad de Raysiño xD-->

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
<center><h1>Actualizador</h1></center>
    <div class="drop-area">
        <img id="uploadPreview" style="width: 500px; height: 500px;" /></img>
        <input id="uploadImage" type="file" name="myPhoto" onchange="PreviewImage();" /></input>
        <script type="text/javascript">

            function PreviewImage() 
            {
              var oFReader = new FileReader();
              oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

              oFReader.onload = function (oFREvent) 
              {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
              };
            };
        </script>
        <div class="derecha">
            <h1><input type="text"></input></h1>
            <input type="text"></input>
        </div>
    </div>
 

</script>
    <script type="text/javascript" src="../js/photo.js"></script>
</body>
</html>


    


<!-- ya duermete un rato ray-->