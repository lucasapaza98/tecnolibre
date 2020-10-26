<?php 
	require_once('conexion/conexion.php');	
	$usuario = 'SELECT * FROM usuarios ORDER BY id DESC';	
	$usuarios=$mysqli->query($usuario);
	
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
	
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
       	
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>HORARIO</th>
            <th>SUELDO</th>
            <th>FECHA</th>
          </tr>
        </thead>
	';
	
	
	while ($user=$usuarios->fetch_assoc()) { 
			if($user['activo']=='A'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
	$content .= '
		<tr bgcolor="'.$color.'">
             <td>'.$user['dni'].'</td>
            <td>'.$user['nombres'].'</td>
            <td>'.$user['apellido'].'</td>
            <td>'.$user['correo'].'</td>
            <td>'.$user['horario'].'</td>
            <td>S/. '.$user['sueldo'].'</td>
            <td>'.$user['fecha'].'</td>
        </tr>
	';
	}
	
	$content .= '</table>';
	
	$content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Pdf Creator </span><a href="http://www.redecodifica.com">By Miguel Angel</a>
            </div>
        </div>
    	
	';
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}

?>
		 
<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->        
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Reporte</title>
<meta name="keywords" content="">
<meta name="description" content="">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/all.min.css">
<link rel="stylesheet" href="../../css3/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
<script src="../../js/jquery.js"></script>
</head>

<style>
	
body{

background-image: url(images/fondo.jpg);



}

header{
    width: 240%;
}

.menu li a {
  font-size:15px;
}



</style>

<body>
  

  <!-- Menu de navegacion principal -->
  <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>

        <nav class="menu">
            <ul>
                <li><a href="../../index.html">Inicio</a></li>
                <li><a href="../../laptops.php">Laptops</a></li>
                <li><a href="../../historia.php">Historias</a></li>
                <li><a href="../../descarga.php">Descargas</a></li>
                <li><a href="../../Admin/tcpdf/index.php">Administrador</a></li>   
                <li style="position: relative; left: 65%;"><a href="../../ayuda.php" title="Ayuda"><i style="font-size:25px;" class="fas fa-question-circle"></i></a></li>
                <li style="position: relative; left: 65%;"><a href="../../login.php" title="Ingresar"><i style="font-size:25px;" class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <main class="contenedor">
      <article>



	<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12">
            	<?php $h1 = "REPORTE";  
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
        </div>
        <center>

            <form action="ingreso.php" method="POST" >
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="fullname">ID</label></center>
                            <input type="text" name="id" id="fullname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="fullname">DNI</label></center>
                            <input type="text" name="dni" id="fullname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="fullname">NOMBRE</label></center>
                            <input type="text" name="nombre" id="fullname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="fullname">APELLIDO</label></center>
                            <input type="text" name="apellido" id="fullname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="fullname">CORREO</label></center>
                            <input type="email" name="correo" id="fullname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="activities">HORARIO</label></center>
                            <select name="horario" id="activities" class="form-control" required="">
                              <option value="">HORARIO</option>
                              <option value="DIA">DIA</option>
                              <option value="NOCHE">NOCHE</option>
                            </select>
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="fullname">SUELDO</label></center>
                            <input type="text" name="sueldo" id="fullname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="date-start">FECHA</label></center>
                            <input type="text" name="fecha" id="date-start" class="form-control" ">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12">
                            <center><label for="activities">ACTIVO</label></center>
                            <select name="activo" id="activities" class="form-control" required="">
                              <option value="">ESTADO</option>
                              <option value="A">A = ACTIVO</option>
                              <option value="I">I = INACTIVO</option>
                            </select>
                          </div>
                        </div>

                        <div class="row form-group">
                          <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Guardar">
                          </div>
                        </div>
                      </form>
                      <form action="convertidor.php">
                      <input type="submit" class="btn btn-danger btn-block" value="Convertir PDF">
</form>
</center>
<br>

    </div>
     <footer> Developed By © Copyright 1999-2020 </footer>
     </article>
    </main>
</body>
</html>