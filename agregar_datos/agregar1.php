
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoLibre - Laptops - Agregar</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css3/agregar.css">
    <script src="../js/jquery.js"></script>
</head>
<body>
         <!-- Menu de navegacion principal -->
         <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>

        <nav class="menu">
            <ul>

         	    <li><a href="../index.html">Inicio</a></li>
				<li><a href="../laptops.php">Laptops</a></li> 
				<li><a href="../historia.php">Historias</a></li>  
                <li><a href="../descarga.php">Descargas</a></li>   
                  
                <li style="position: relative; left: 65%;"><a href="../ayuda.php" title="Ayuda"><i style="font-size:25px;" class="fas fa-question-circle"></i></a></li>
                <li style="position: relative; left: 65%;"><a href="../login.php" title="Ingresar"><i style="font-size:25px;" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

<main class="contenedor">
    <article>

    <div class="principal">
        <div class="subprincipal">   
        <fieldset>
          <legend><h1>Agregar Producto</h1></legend>  

    <form class="formulario" action="../laptops.php" method="POST" onsubmit="return compras();">
       <label for="num">Nº:</label>
        <input type="number" name="num" id="num" required> <br>
        <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre" placeholder="Agregar tu nombre" required > <br>
      <label for="marca">Marca:</label>
      <input type="text" name="marca" id="marca" placeholder="Agregar tu marca" required><br>
      <label for="precioactual">Precio Actual:</label>
      <input type="text" name="precioactual" id="precioactual" placeholder="Agregar tu precio actual" required ><br>
      <label for="precioanterior">Precio Anterior</label>
      <input type="text" name="precioanterior" id="precioanterior" placeholder="Agregar tu precio anterior" required><br>
      <label for="color">Color:</label>
      <input type="text" name="color"  id="color" required><br>
    
      <input type="submit" class="boton" id="btn-agregar" value="Agregar" name="agregar">
      <input type="reset" class="boton1" id="btn-actualizar" value="Actualizar" name="actualizar">
     
    </form>
   
    

    </fieldset>


 

    </div>
    <footer>Developed By © Copyright 1999-2020</footer>
    </div>


    </article>

    
</main>

<script src="../js/compras.js"></script>
</body>
</html>
