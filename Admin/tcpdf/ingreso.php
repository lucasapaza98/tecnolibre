<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->

<?php

    $usuario = "root"; //en Este caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="pdf"; //nombre de la base de datos



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 

// Chiphysi programación suscribete -->
// V 0.1 original -->
// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
// Derechos de autor(Suscribete)  -->


$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");

    $id=$_POST['id'];
    $dni=$_POST['dni']; 
    $nombre=$_POST['nombre']; 
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $horario=$_POST['horario']; 
    $sueldo=$_POST['sueldo']; 
    $fecha=$_POST['fecha']; 
    $activo=$_POST['activo'];


// Chiphysi programación suscribete -->
// V 0.1 original -->
// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
// Derechos de autor(Suscribete)  --> 


    $sql="INSERT INTO usuarios VALUES ('$id','$dni','$nombre','$apellido','$correo','$horario','$sueldo','$fecha','$activo')"; 
    

// Chiphysi programación suscribete -->
// V 0.1 original -->
// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
// Derechos de autor(Suscribete)  -->

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';
         echo "<script>location.href='index.php'</script>";	
    }else{
        echo '<script>alert("datos guardado correctamente ")</script> ';
        
        echo "<script>location.href='index.php'</script>";	
    }
     
?>

<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->

<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->

<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->

<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->

<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->