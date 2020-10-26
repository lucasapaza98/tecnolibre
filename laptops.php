<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "formularios";

$enlace = mysqli_connect($servidor , $usuario , $clave , $basededatos);

if(!$enlace){
	echo '<font color="red"><b>*error en el servidor</b></font>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoLibre - Laptops</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css3/laptops.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery.js"></script>
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
        <div class="main" style="width:80%;">
				<header class="tituloprincipal"style="padding: 8%;">
					<h1>Laptops o Notebooks  </h1>
				</header>
				

				<header class="principal2" style="background: none;">
					<h2>Laptops,ventas y más </h2>
					<p>Manténgase conectado con tecnología que es sencilla e inspiradora. Con esta versátil familia de laptops, puede confiar en que Inspiron proporcionará ...</p>
				</header>
			</div>

		
			<hr width="40%" align="center">

			
		 
		
			<table >
			<caption>Productos</caption>
				
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Precio Actual</th> 
						<th>Precio Anterior</th>
						<th>Color</th>
						<th>Ventas</th>
					</tr>
				</thead>

				<tbody>
					<?php
					
					$consulta = "SELECT * FROM datos";
					$ejecutarconsultas = mysqli_query($enlace , $consulta);
					$verfilas = mysqli_num_rows($ejecutarconsultas);
					$fila = mysqli_fetch_array($ejecutarconsultas);
					if(!$ejecutarconsultas){
						echo '<font color ="red"><b>Error en la consultas</b></font>';

					}else{
						if($verfilas < 1){
							echo '<tr>
									<td colspan="7">Sin registros</td>
								 </tr>';
						}else{
							for($i = 0; $i <= $fila; $i++){
								echo '
										<tr>
											<td>'.$fila[0].'</td>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
											<td>'.$fila[3].'</td>
											<td>'.$fila[4].'</td>
											<td>'.$fila[5].'</td>
											<td><a href="Tarjetas/comprar.php" style="text-decoration:none; color:blue;">Comprar</a></td>
										</tr>
								
									';

									$fila = mysqli_fetch_array($ejecutarconsultas);
													
			

						}
					}
				}
							
						
					
					
					?>
				<!--	<tr>
						<td>1</td><td>Notebook EXO</td><td>EXO</td><td>$38.999</td> <td>$46.799</td> <td>Gris</td> <td><a href="Tarjetas/comprar.php">Comprar</a></td>
					</tr>
					-->
				</tbody>
			</table>
			<div class="add" >
			<b class="agr" style="margin-left: 8em;"><a href="agregar_datos/agregar1.php" style="text-decoration:none;"><font size="4" color="green">Insertar</font></a></b>

			
						
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
	<script src="js/tabla.js"></script>
	
	
</body>
</html>

<?php
			if(isset($_POST['agregar'])){
				$id = $_POST["num"];
				$nombre = $_POST["nombre"];
				$marca = $_POST["marca"];
				$precioactual = $_POST["precioactual"];
				$precioanterior= $_POST["precioanterior"];
				$color = $_POST["color"];

				$insertardatos = "INSERT INTO datos VALUES ('$id',
															'$nombre',
															'$marca',
															'$precioactual',
															'$precioanterior',
															'$color')";

				$ejecutarinsertar = mysqli_query($enlace , $insertardatos);


				if(!$ejecutarinsertar){
					echo ' <font color="red"><b>no se ejecuta en la linea de SQL</b></font>';
				}

			}
			?>

<?php
	echo '<br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>';
			$csv = fopen("csv/productos.csv","a+");
			
			$texto = $id." ".$nombre." ".$marca." ".$precioactual." ".$precioanterior." ".$color.chr(13).chr(10);

			fwrite($csv, $texto);

			fclose($csv);




			$id2 = $_POST["num"];
			$nombre2 = $_POST["nombre"];
			$marca2 = $_POST["marca"];
			$precioactual2 = $_POST["precioactual"];
			$precioanterior2= $_POST["precioanterior"];
			$color2 = $_POST["color"];

			$csv2 = fopen("csv/productos.doc","a+");
			
			$texto2 = $id2." ".$nombre2." ".$marca2." ".$precioactual2." ".$precioanterior2." ".$color2.chr(13).chr(10);

			fwrite($csv2, $texto2);

			fclose($csv2);




			
			$id3 = $_POST["num"];
			$nombre3 = $_POST["nombre"];
			$marca3 = $_POST["marca"];
			$precioactual3 = $_POST["precioactual"];
			$precioanterior3= $_POST["precioanterior"];
			$color3 = $_POST["color"];




			$csv3 = fopen("csv/productos.txt","a+");
			
			$texto3 = $id3." ".$nombre3." ".$marca3." ".$precioactual3." ".$precioanterior3." ".$color3.chr(13).chr(10);

			fwrite($csv3, $texto3);

			fclose($csv3);

?>
			
			
		
			
			
		
		<!--*	$csv = fopen("csv/productos.csv", "r");
			$todo = fread($csv , filesize("csv/productos.csv"));
			$lineas = explode(chr(13).chr(10), $todo);

			$bandera = 0;

			for($i = 0 ; $i < count($lineas)-1; $i++){
				$palabras = explode("|" , $lineas[$i]);


				if($id == $palabras[0] && $nombre == $palabras[1] ){
					echo "<i>*El id ya esta registrado</i>";
					echo "<i>*El Nombre ya esta registrado</i>";
					echo "<i>*La Marca ya esta registrado</i>";
					echo "<i>*El Precio Actual ya esta registrado</i>";
					echo "<i>*El Precio Anterior ya esta registrado</i>";
					echo "<i>*El Color ya está registrado</i>";
					$bandera = 1;
				break;


				} else{
					$bandera = 0;
				}
			}

			if($bandera = 0){
				$texto = $id."|".$nombre."|".$marca."|".$precioactual."|".$precioanterior."|".$color.chr(13).chr(10);
				fwrite($csv, $texto);
				
			}
*/


		-->	
			
	

	<!-- 
				<table>
			<thead>
			<caption><a name="contenido2"></a>Listas de productos II</caption>
					<tr>
						<th>#</th><th>Nombre</th><th>Marca</th><th>Precio Actual</th> <th>Precio Anterior</th><th>Descuento</th><th>Color</th><th>Ventas</th>
					</tr>
				</thead>

				<tbody>

						<tr>
						<td>1</td><td>Notebook EXO</td><td>EXO</td><td>$38.999</td> <td>$46.799</td> <td>Gris</td> <td><a href="Tabla1/lenovo1.php">Comprar</a></td>
					</tr>
					<tr>
						<td>2</td><td>Notebook Intel</td><td>Intel</td><td>$38.999</td>  <td>$38.999</td><td>Gris</td>  <td><a href="Tabla1/lenovo2.php">Comprar</a></td>
					</tr>
					<tr>
						<td>3</td><td>Notebook EXO </td><td>EXO</td><td>$50.999</td>  <td>$62.399</td><td>Gris</td> <td><a href="Tabla1/lenovo3.php">Comprar</a></td>
					</tr>
					<tr>
						<td>4</td><td>Notebook HP</td><td>HP</td><td>$56.999</td><td>$89.998</td><td>Negro</td> <td><a href="Tabla1/lenovo4.php">Comprar</a></td>
					</tr>
					<tr>
						<td>5</td><td>Notebook HP</td><td>HP</td><td>$73.999</td>  <td>$73.999</td><td>Gris Plata</td>  <td><a href="Tabla1/lenovo5.php">Comprar</a></td>
					</tr>
				<tr>
						<td>11</td><td>Notebook Exo Smart Intel I3 Xl4 F3145 4gb/120gb 15.6</td><td>EXO</td><td>$69.999</td>  <td>$69.999</td><td>-</td><td>Gris</td>  <td><a href="Tabla1/lenovo11.php">Comprar</a></td>
					</tr>
					<tr>
						<td>12</td><td>Notebook Dell Intel I3 1005g1 4gb 1tb 15.6 Vostro 3591</td><td>Dell</td><td>$70.999</td>  <td>$99.999</td><td>29%</td><td>Negro</td>  <td><a href="Tabla1/lenovo12.php">Comprar</a></td>
					</tr>
					<tr>
						<td>13</td><td>Notebook Hp 14 Amd Athlon Silver 8gb Ssd 128 Gb</td><td>HP</td><td>$61.690</td> <td>$62.590</td> <td>10%</td><td>Negro</td>  <td><a href="Tabla1/lenovo13.php">Comprar</a></td>
					</tr>
					<tr>
						<td>14</td><td>Notebook Hp 14-ck0047la Core I3 4gb 1tb 14 Wifi Windows 10</td><td>HP</td><td>$72.999</td>  <td>$72.999</td><td>-</td><td>Gris oscuro</td>  <td><a href="Tabla1/lenovo14.php">Comprar</a></td>
					</tr>
					<tr>
						<td>15</td><td>Notebook Intel Cloudbook 4gb 64gb Enova Windows Bkp</td><td>Intel</td><td>$35.599</td>  <td>$35.599</td><td>-</td><td>Gris</td>  <td><a href="Tabla1/lenovo15.php">Comprar</a></td>
					</tr>
					<tr>
						<td>16</td><td>Notebook Lenovo V15 Core I5 10ma Gen 1tb + Ssd 240gb 12gb</td><td>Lenovo</td><td>$148.985</td>  <td>$209.999</td><td>29%</td><td>Gris</td>  <td><a href="Tabla1/lenovo16.php">Comprar</a></td>
					</tr>
					<tr>
						<td>17</td><td>Notebook Acer Nitro 5 I5-9300h Gtx 1650 An515-54-52m4</td><td>Acer</td><td>$119.999</td>  <td>$137.999</td><td>13%</td><td>Negro</td> <td><a href="Tabla1/lenovo17.php">Comprar</a></td>
					</tr>
					<tr>
						<td>18</td><td>Notebook Hp 14-dw0065la I7 1065g7 8gb 512gb Ssd Windows 10</td><td>HP</td><td>$128.149</td>  <td>$128.149</td><td>-</td><td>Plata</td> <td><a href="Tabla1/lenovo18.php">Comprar</a></td>
					</tr>
					<tr>
						<td>19</td><td>Notebook Exo Smart Intel I3 Xl4 F3145 4gb/120gb 15.6</td><td>Intel</td><td>$69.999</td>  <td>$69.999</td><td>-</td><td>Gris</td>  <td><a href="Tabla1/lenovo19.php">Comprar</a></td>
					</tr>
					<tr>
						<td>20</td><td>Notebook Gamer Dell I7 10ma 32gb Ssd960 Win10 Mx230 15.6 Fhd</td><td>Dell</td><td>$209.985</td>  <td>$209.985</td><td>-</td><td>Gris</td>  <td><a href="Tabla1/lenovo20.php">Comprar</a></td>
					</tr>

				
				</tbody>
			</table>
			<div class="add" >
				<b><font size="5" color="#ADADA6">+</font></b> <b><font size="4" color="#ADADA6">Agregar</font></b>
			</div>

			<table>
			<caption><a name="contenido4"></a>Listas de productos IV</caption>
			<thead>
					<tr>
						<th>#</th><th>Nombre</th><th>Marca</th><th>Precio Actual</th> <th>Precio Anterior</th><th>Descuento</th><th>Color</th><th>Ventas</th>
					</tr>
				</thead>

				<tbody>
				<tr>
						<td>31</td><td>Notebook Hp 250 G7 I3 7020u 8gb Ssd 240gb 15.6 Win10 Home</td><td>HP</td><td>$89.985</td> <td>$125.999</td> <td>28%</td><td>Negro</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>32</td><td>Notebook Exo Smart Intel I3 Xl4 F3148l 15.6 Ssd240gb/4gb Cuo</td><td>Intel</td><td>$71.999</td> <td>$71.999</td> <td>-</td><td>Gris</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>33</td><td>Notebook Lenovo V15 Core I7 10ma Gen 1tb + Ssd240 12gb W10</td><td>Lenovo</td><td>$163.985</td><td>$229.999</td> <td>28%</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>34</td><td>Notebook Hp 250 G7 Core I3 7020u 8gb 1tb 15.6 Win10 Home</td><td>HP</td><td>$89.995</td> <td>$89.995</td> <td>-</td><td>Negro</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>35</td><td>Notebook Exo Smart Intel Core I3 Xl4-f3148 4gb/1tb 15,6 W10</td><td>Intel</td><td>$72.999</td> <td>$89.999</td> <td>18%</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
				
					<tr>
						<td>36</td><td>Notebook Dell Inspiron Intel Core I3 8gb 1tb Ultrabook Gamer</td><td>Dell</td><td>$84.999</td> <td>$84.999</td> <td>-</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>37</td><td>Notebook Dell Inspiron Intel Core I3 4gb 1tb Gamer</td><td>Dell</td><td>$79.999</td><td>$79.999</td> <td>-</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>38</td><td>Notebook Hp 14-cm0045la Amd A4 Ram 4gb Dd 64gb Radeon R3 Windows 10 Tienda Oficial Hp</td><td>HP</td><td>$59.999</td> <td>$59.999</td> <td>-</td><td>Negro</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>39</td><td>Notebook Lenovo V15 Core I5 10ma Gen Ssd 240gb 8gb 15.6</td><td>Lenovo</td><td>$122.985</td> <td>$174.999</td> <td>29%</td><td>Gris</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>40</td><td>Notebook Hp 240 G7 Intel N4000 8gb 500gb Led 14 Hdmi</td><td>HP</td><td>$63.985</td><td>$91.999</td>  <td>30%</td><td>Negro</td>  <td><a href="#">Comprar</a></td>
					</tr>
				</tbody>
			</table>
			

			<table>
			<caption><a name="contenido5"></a>Listas de productos V</caption>
			<thead>
					<tr>
						<th>#</th><th>Nombre</th><th>Marca</th><th>Precio Actual</th> <th>Precio Anterior</th><th>Descuento</th><th>Color</th><th>Ventas</th>
					</tr>
				</thead>

				<tbody>
					
				
					<tr>
						<td>41</td><td>Notebook Lenovo Intel I3 8130u 8gb Ssd 240gb Dvdrw 15.6 Hd</td><td>Lenovo</td><td>$74.499</td> <td>$74.499</td> <td>-</td><td>Gris oscuro</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>42</td><td>Notebook Dell Intel I3 1005g1 4gb 128gb Ssd Windows 10</td><td>Dell</td><td>$70.999</td><td>$99.999</td>  <td>29%</td><td>Gris oscuro</td> <td><a href="#">Comprar</a></td>
					</tr>
				
					<tr>
						<td>43</td><td>Notebook Lenovo 256gb 8gb Ram Ssd Intel Core I3 Windows 10</td><td>Lenovo</td><td>$84.999</td><td>$84.999</td> <td>-</td> <td>Azul</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>44</td><td>Notebook Hp Intel Dual Core 8gb 500g Gtia Oficial Promo Mexx</td><td>HP</td><td>$61.999</td> <td>$61.999</td> <td>-</td><td>Negro</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>45</td><td>Notebook Dell Latitude 5400 I5 16gb 256gb Ssd Win10 Pro</td><td>Dell</td><td>$135.785</td> <td>$199.999</td> <td>32%</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>46</td><td>Notebook Exo Dual N3550 4 G Ssd 64 Hd 500 Led 14 W10 Office</td><td>Exo</td><td>$45.499</td> <td>$45.499</td> <td>-</td><td>Gris oscuro</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>47</td><td>Notebook Asus Intel Dual Core Hd Usb Hdmi 15.6 4gb Ssd 240</td><td>Asus</td><td>$69.999</td> <td>$69.999</td> <td>-</td><td>Gris</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>48</td><td>Notebook I5 8gb Ram Disco Ssd 480gb Enova Windows Cuotas</td><td>I5</td><td>$93.291</td> <td>$103.657</td> <td>10%</td><td>Gris</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>49</td><td>Notebook Exo E25 Plus Mi Compu Fácil Ideal Adultos Mayores</td><td>Exo</td><td>$51.999</td> <td>$62.399</td> <td>33%</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>50</td><td>Notebook Hp 14-dk1003dx Amd Athlon 4gb Ssd 128gb Windows 10</td><td>HP</td><td>$53.999</td> <td>$53.999</td> <td>-</td><td>Negro</td>  <td><a href="#">Comprar</a></td>
					</tr>
				</tbody>
			</table>

			<table>
			<caption><a name="contenido3"></a>Listas de productos III</caption>
			<thead>
					<tr>
						<th>#</th><th>Nombre</th><th>Marca</th><th>Precio Actual</th> <th>Precio Anterior</th><th>Descuento</th><th>Color</th><th>Ventas</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>21</td><td>Notebook Lenovo V15 Core I7 10ma Gen 1tb + Ssd 240gb 12gb</td><td>Lenovo</td><td>$148.985</td>  <td>$209.999</td><td>29%</td><td>Gris</td>  <td><a href="Tabla1/lenovo21.php">Comprar</a></td>
					</tr>
					<tr>
						<td>22</td><td>Notebook Bangho Zero M4 I1 Intel Celeron 14 Full Hd 240gb</td><td>Bangho</td><td>$53.000</td> <td>$53.000</td> <td>-</td><td>Negro</td>  <td><a href="Tabla1/lenovo22.php">Comprar</a></td>
					</tr>
					<tr>
						<td>23</td><td>Notebook Exo Intel Celeron Smart E19 64gb Ssd 4gb Ram Wifi</td><td>Intel</td><td>$38.999</td> <td>$58.499</td> <td>16%</td><td>Silver</td> <td><a href="Tabla1/lenovo23.php">Comprar</a></td>
					</tr>
					<tr>
						<td>24</td><td>Notebook Exo Intel Celeron Smart E25 128gb Hdd 4gb Ram Wifi</td><td>Intel</td><td>$49.998</td><td>$74.999</td>  <td>33%</td><td>Gris</td> <td><a href="Tabla1/lenovo24.php">Comprar</a></td>
					</tr>
					<tr>
						<td>25</td><td>Notebook Hp 240 G7 14 Intel Core I3 8130u 8gb 1tb Win10</td><td>Intel</td><td>$83.985</td> <td>$126.999</td> <td>33%</td><td>Griis oscuro</td>  <td><a href="Tabla1/lenovo25.php">Comprar</a></td>
					</tr>
					
					
					<tr>
						<td>26</td><td>Notebook Hp 250 G7 I5 8265u 8gb 1tb + Ssd 240gb 15.6</td><td>HP</td><td>$127.985</td> <td>$179.999</td> <td>28%</td><td>Negro</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>27</td><td>Notebook Lenovo V15 I5 1035g1 4gb 1tb 15.6 Garantia Oficial</td><td>Lenovo</td><td>$89.999</td> <td>$130.499</td> <td>31%</td><td>Gris</td> <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>28</td><td>Notebook Cx Cloudbook Intel Z8350 4g 64gb W10 Cx23500w Ctas</td><td>Intel</td><td>$46.899</td> <td>$59.999</td> <td>21%</td><td>Blanco</td> <td><a href="#">Comprar</a></td>
					</tr>
				
					<tr>
						<td>29</td><td>Notebook Asus Zenbook Um431 Ryzen 5 8gb Ssd 512gb Huella</td><td>Asus</td><td>$123.985</td> <td>$181.999</td> <td>31%</td><td>Gris</td>  <td><a href="#">Comprar</a></td>
					</tr>
					<tr>
						<td>30</td><td>Notebook 14 Hp 240 G7 Intel Core I3 4gb 1tb Hdmi Bt Freedos</td><td>HP</td><td>$63.999</td> <td>$63.999</td> <td>-</td><td>Negro</td>  <td><a href="#">Comprar</a></td>
					</tr>

				</tbody>
			</table>

		-->