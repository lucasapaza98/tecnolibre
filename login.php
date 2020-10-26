<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoLibre - register</title>
    <link rel="stylesheet" href="css3/login.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Menu de navegacion principal -->
     <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>

        <nav class="menu">
            <ul>
            <li><a href="index.html">Inicio</a></li>
                <li><a href="laptops.php">Laptops</a></li>  
                <li><a href="historia.php">Historias</a></li>
                <li><a href="descarga.php">Descargas</a></li> 
                <li><a href="Admin/tcpdf/index.php">Administrador</a></li>
                       
                <li style="position: relative; left: 65%;"><a href="ayuda.php" title="Ayuda"><i style="font-size:25px;" class="fas fa-question-circle"></i></a></li>
                <li style="position: relative; left: 65%;"><a href="login.php" title="Ingresar"><i style="font-size:25px;" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <main class="contenedor">
		<article>
        <h1>Formulario de Registro</h1>

<form action="RegistrosyLogin/registroexitoso.php" method="POST" class="form-register"  onsubmit="return validar();">
    <h2 class="form_titulo">CREA UNA CUENTA</h2>
    <div class="contenedor-inputs">
        <input type="number" name="id" id="id" placeholder="Id" class="input-50" required>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-50" required>
        <input type="text" id="apellido"name="apellido" placeholder="Apellido" class="input-50" required>
        <input type="email" id="correo"name="correo" placeholder="Correo" class="input-100" required>
        <input type="text" id="usuario"name="usuario" placeholder="Usuario" class="input-50" required>
        <input type="password"id="clave" name="clave" placeholder="Contraseña" class="input-50" required>
        <input type="text" id="telefono"name="telefono" placeholder="Telefono" class="input-100" required>
        <input type="submit" value="Registrar" class="btn-registrar" name="registrar" required>
        <p class="form_link">¿Ya tienes una cuenta? <a href="login2.php">Ingresa aquí</a> </p>
       
    </div>

</form>


            <div class="servicios">

            <div class="redes">
                        <p><a href="https://api.whatsapp.com/send?phone=5491151761067&" title="WhatsApp"><i   class="wsp   fab fa-whatsapp"></i></a></p>
                        <p><a href="https://www.facebook.com/estebanquito.234" title="Facebook"><i   class="fb    fab fa-facebook"></i></a></p>
                        <p><a href="https://www.instagram.com/eltuturri" title="Instagram"><i  class="ig    fab fa-instagram"></i></a></p>
                    </div>

                    
                </div>
                <footer> Developed By © Copyright 1999-2020  </footer>
        
		</article>
    </main>
    <script src="js/validar.js"></script>
</body>
</html>