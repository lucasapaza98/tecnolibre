<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoLibre - Ayuda</title>
    <link rel="stylesheet" href="css3/ayuda.css">
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
               
                   
                <li style="position: relative; left: 65%;"><a href="ayuda.php" title="Ayuda"><i style="font-size:25px;" class="fas fa-question-circle"></i></a></li>
                <li style="position: relative; left: 65%;"><a href="login.php" title="Ingresar"><i style="font-size:25px;" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <main class="contenedor">
		<article>
            <section>
                <p style="font-size:17px;">Si tenés alguna dudas sobre lo que quieras comprar <b style="font-size: 17px;">escribime aquí</b></p>
               
            </section>
             <div class="content">
                 <form action="validaciones/enviarmensaje.php" method="POST" class="enviarcontacto" onsubmit=" return ayuda();">
                 <h2>Enviar mensaje</h2>

                 <div class="info">
                     <input type="text" id="nombre" name="nombre" placeholder="Nombre*" required><br><br>
                     <input type="text" id="correo" name="correo" placeholder="Correo*" required><br><br>
                     <textarea name="mensaje" id="mensaje" required style="color: black;" >Mensaje</textarea>

                     <input type="submit" value="Enviar" id="enviar">

                    </div>
                 </form>

             </div>
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
    
    <script src="js/ayuda.js"></script>
</body>
</html>
