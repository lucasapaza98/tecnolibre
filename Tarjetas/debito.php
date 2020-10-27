<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops - comprar - débito</title>
    <link rel="stylesheet" href="../css3/comprar.css" type="text/css">
    <link rel="stylesheet" href="../css/all.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
</head>
<style>
   
.tarjeta .delantera {
	width: 100%;
	background: url(../img/bg-tarjeta/bg-tarjeta-03.jpg);
	background-size: cover;
}

    .trasera {
	    background: url(../img/bg-tarjeta/bg-tarjeta-03.jpg);
	    background-size: cover;
    	position: absolute;
	    top: 0;
	    transform: rotateY(180deg);
	    backface-visibility: hidden;
}
</style>
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

        <div class="contenedor1">

<!-- Tarjeta -->
<section class="tarjeta" id="tarjeta">
    <div class="delantera">
        <div class="logo-marca" id="logo-marca">
            <!-- <img src="img/logos/visa.png" alt=""> -->
        </div>
        <img src="img/chip-tarjeta.png" class="chip" alt="">
        <div class="datos">
            <div class="grupo" id="numero">
                <p class="label">Número Tarjeta</p>
                <p class="numero">#### #### #### ####</p>
            </div>
            <div class="flexbox">
                <div class="grupo" id="nombre">
                    <p class="label">Nombre Tarjeta</p>
                    <p class="nombre">Jhon Doe</p>
                </div>

                <div class="grupo" id="expiracion">
                    <p class="label">Expiracion</p>
                    <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="trasera">
        <div class="barra-magnetica"></div>
        <div class="datos">
            <div class="grupo" id="firma">
                <p class="label">Firma</p>
                <div class="firma"><p></p></div>
            </div>
            <div class="grupo" id="ccv">
                <p class="label">CCV</p>
                <p class="ccv"></p>
            </div>
        </div>
        <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
        <a href="#" class="link-banco">www.tubanco.com</a>
    </div>
</section>

<!-- Contenedor Boton Abrir Formulario -->
<div class="contenedor-btn">
    <button class="btn-abrir-formulario" id="btn-abrir-formulario">
        <i class="fas fa-plus"></i>
    </button>
</div>

<!-- Formulario -->
<form action="Exit/debitoexit.php" id="formulario-tarjeta" class="formulario-tarjeta" method="POST"onsubmit= "return debito();">
    <div class="grupo">
        <label for="inputNumero">Número Tarjeta</label>
        <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
    </div>
    <div class="grupo">
        <label for="inputNombre">Nombre</label>
        <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
    </div>
    <div class="flexbox">
        <div class="grupo expira">
            <label for="selectMes">Expiracion</label>
            <div class="flexbox">
                <div class="grupo-select">
                    <select name="mes" id="selectMes">
                        <option disabled selected>Mes</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
                <div class="grupo-select">
                    <select name="year" id="selectYear">
                        <option disabled selected>Año</option>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
        </div>

        <div class="grupo ccv">
            <label for="inputCCV">CCV</label>
            <input type="text" id="inputCCV" maxlength="3">
        </div>
    </div>
    <button type="submit" class="btn-enviar">Enviar</button>
</form>
</div>



        <div class="servicios">

        <div class="redes">
                        <p><a href="https://api.whatsapp.com/send?phone=5491151761067&" title="WhatsApp"><i   class="wsp   fab fa-whatsapp"></i></a></p>
                        <p><a href="https://www.facebook.com/estebanquito.234" title="Facebook"><i   class="fb    fab fa-facebook"></i></a></p>
                        <p><a href="https://www.instagram.com/eltuturri" title="Instagram"><i  class="ig    fab fa-instagram"></i></a></p>
                    </div>


</div>


    <footer> Developed By © Copyright 1999-2020 </footer>

  
        </article>
    </main>
    <script src="../js/tarjeta.js"></script>
    <script src="../js/debito.js"></script>
    
</body>
</html>
