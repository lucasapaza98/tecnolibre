<?php
$servidor1 = "localhost";
$usuario1 = "root";
$clave1 = "";
$basededatos1 = "formulariosregistro";

$enlace1 = mysqli_connect($servidor1 , $usuario1 , $clave1 , $basededatos1);

if(!$enlace1){
    echo '<font color="red"><b>*error en el servidor</b></font>';
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoLibre - Register</title>
    <link rel="stylesheet" href="../css3/registroexitoso.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <script src="../js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
</head>
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
                <li><a href="../Admin/tcpdf/index.php">Administrador</a></li>
                     
                <li style="position: relative; left: 65%;"><a href="../ayuda.php" title="Ayuda"><i style="font-size:25px;" class="fas fa-question-circle"></i></a></li>
                <li style="position: relative; left: 65%;"><a href="../login.php" title="Ingresar"><i style="font-size:25px;" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>
    <main class="contenedor">
        <article>
          <center>  
            <table style="width:68%; border-collapse:collapse; margin-top:10%;">
            <caption><b><u><font color="green" size="5">Datos ingresados</font></u></b></caption>
                <thead>
                <tr>
                    <th style="padding :15px 40px; font-size:18px;">Id</th>
                    <th style="font-size:18px;">Nombre</th>
                    <th style="font-size:18px">Apellido</th>
                    <th style="font-size:18px">Correo</th>
                    <th style="font-size:18px">Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consulta1 = "SELECT * FROM registros";
                    $ejecutarconsulta1 = mysqli_query($enlace1,$consulta1);
                    $verfilas1 = mysqli_num_rows($ejecutarconsulta1);
                    $fila1 = mysqli_fetch_array($ejecutarconsulta1);
                    if(!$ejecutarconsulta1){
                        echo '<font color ="red"><b>Error en la consultas</b></font>';
                    }
                    else {
                        if($verfilas1 < 1){
                            echo '<tr>
                                      <td colspan="4" style="text-align:center;">Sin registros</td>
                                  </tr>';
                        } else{
                            for($i = 0; $i <= $fila1; $i++){
                                echo ' <tr>
                                            <td  style="text-align:center; padding:10px;">'.$fila1[0].'</td>
                                            <td  style="text-align:center;">'.$fila1[1].'</td>
                                            <td  style="text-align:center;">'.$fila1[2].'</td>
                                            <td  style="text-align:center;">'.$fila1[3].'</td>
                                            <td  style="text-align:center;">'.$fila1[4].'</td>
                                            
                                        </tr>  
                                        
                                        ';

                              $fila1 = mysqli_fetch_array($ejecutarconsulta1);
                            }
                        }

                    }

                 

                    ?>

                </tbody>
            </table>
         </center>

       

 <button style=" cursor:pointer;padding:6px; width:10%; margin-left:45%; margin-top:15%;"><p><a style="text-decoration: none; font-size:18px; color:blue;" href="../login.php">Atras</a></p></button> 

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

</body>
</html>

<?php

if(isset($_POST['registrar'])){
    $id = $_POST["id"];
    $nombre1 = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $user = $_POST["usuario"];

    $insert = "INSERT INTO registros VALUES('$id',
                                           '$nombre1',
                                           '$apellido',
                                           '$correo',
                                           '$user')";

    $ejecutar = mysqli_query($enlace1 , $insert);

    if(!$ejecutar){
        echo '<font color="red"><b>Error</b></font>';
    }

}

?>

<?php



$usuario = fopen("../csv/user.csv", "a+");
$text = $id."  ".$nombre1."  ".$apellido." ".$correo." ".$user.chr(13).chr(10);

fwrite($usuario , $text);

fclose($usuario);




$id2 = $_POST["id"];
$nombre2 = $_POST["nombre"];
$apellido2 = $_POST["apellido"];
$correo2 = $_POST["correo"];
$user2 = $_POST["usuario"];

$usuario2 = fopen("../csv/user.doc", "a+");
$text2 =$id2."  ". $nombre2."   ".$apellido2." ".$correo2." ".$user2.chr(13).chr(10);

fwrite($usuario2 , $text2);

fclose($usuario2);

$id3 = $_POST["id"];
$nombre3 = $_POST["nombre"];
$apellido3 = $_POST["apellido"];
$correo3 = $_POST["correo"];
$user3 = $_POST["usuario"];

$usuario3 = fopen("../csv/user.txt", "a+");
$text3 =$id3."  ". $nombre3."   ".$apellido3." ".$correo3." ".$user3.chr(13).chr(10);

fwrite($usuario3 , $text3);

fclose($usuario3);

?>


<!--    echo '
<center>

    <table style="width:68%; border-collapse:collapse; margin-top:10%; "> 
     <caption><b><font color="green" size="5">Datos ingresados</font></b></caption>
    <thead>
    <tr>
        <th style="padding :15px 40px; font-size:18px;">Nombre</th>
        <th style="font-size:18px">Apellido</th>
        <th style="font-size:18px">Correo</th>
        <th style="font-size:18px">Usuario</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td style="text-align:center; padding:10px;">'.$nombre.'</td>
        <td style="text-align:center;">'.$apellido.'</td>
        <td style="text-align:center;">'.$correo.'</td>
        <td style="text-align:center;">'.$user.'</td>
    </tr>

    </tbody>
</table>
</center>





-->




