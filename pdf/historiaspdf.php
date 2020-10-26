<?php


include_once '../fpdf/fpdf.php';

$texto = new FPDF();
$texto->AddPage('PORTRAIT' , 'letter');

$texto->SetFont('Arial', 'B' ,25);
$texto->Text(40, 30,'Breve historia de las Laptops');
$texto -> Ln(50);

$texto->SetFont('Arial', '' ,12);
$texto->Write(8,'A la hora de hablar de laptops, Bill Moggridge es un nombre que todos deberiamos tener en nuestras mentes, ya que se trata del diseñador ingles a quien se le atribuye la invencion de las laptops. En 1982 Bill Moggridge creo la primera laptop de la historia en 1982, la cual llevaba por nombre GRiD Compass 101. Esta computadora portatil contaba con la mas alta tecnologia de su tiempo. Tenia una pantalla electroluminiscente (ELD) y fue la primera en tener una pantalla grande y brillante.');
$texto->Ln(15);
$texto->Write(8,'Su precio era extremadamente alto -$8,150 dolares- por lo que no era un equipo para todo el publico. Sus mas frecuentes usuarios fueron ingenieros de la NASA dentro de transbordadores espaciales y militares de los Estados Unidos. Su sistema operativo era muy simple, el MS-DOS BIOS version A, y el almacenamiento interno era de 384K, mientras que la memoria RAM era de 256K, algo muy impresionante para su epoca. El procesador con el que trabajaba era un Intel 80186. Pesaba unos 4 kilos.');
$texto->Image('../img/00.Laptops/story1.jpg',10,180,100);
$texto -> Ln(40);

$texto->AddPage('PORTRAIT' , 'letter');
$texto->Ln(15);
$texto->SetFont('Arial' , '',12);
$texto->Write(8,'Si bien no es la primer “computadora portátil” -dado que Epson y Compaq llevaron al mercado modelos como la HX-20 y la Compaq Portable, respectivamente- su diseño se asemeja a las primeras calculadoras gigantes o computadoras de escritorio miniatura y no a un “cuaderno”. Es por esto que la GRiD Compass se considera la primera laptop de la historia.');
$texto -> Ln(15);
$texto->Write(8,'Fue hasta 1986 que la compañia IBM presento la IBM Convertible PC. La estructura exterior luce muy similar a lo que ya hemos visto; se parece bastante a las maquinas de escribir electricas.');
$texto -> Ln(15);
$texto->Write(8,'La IBM Convertible PC fue presentada en abril de 1986, costaba poco más de $1,900 dolares y tenia un peso superior al de la mayoria, dado que venia acompañada con una impresora termica (5Kg). Para interactuar con el sistema –que ya era un PC-DOS Basic– contaba con una pantalla LCD de 640 x 200 pixeles y dos entradas para discos Floppy.');
$texto->Ln(20);
$texto->SetFont('Arial', 'B',20);
$texto->Text(30,155,'Por que lleva el nombre de Convertible?');
$texto->SetFont('Arial', '', 12);
$texto->Ln(50);
$texto->Write(8,'Asi como las laptops Asus Transformer a las que les puedes desmontar la pantalla para usarlas como tablet, a la IBM tambien podias quitarle la pantalla, pero no para usarlas como tablet. De hecho, el monitor desconectado era inutil; podias conectar la parte del teclado a un monitor fijo y convertirla en una computadora de escritorio con impresora incluida. Claro esta, para tal accion se necesitaba contar con los adaptadores necesarios, los cuales tenian precios bastante elevados, que iban desde los $190');


$texto->AddPage('PORTRAIT', 'letter');
$texto->Ln(15);
$texto->Image('../img/00.Laptops/story2.jpg',10,10,130);
$texto->Image('../img/00.Laptops/story3.jpg',10,90,130);
$texto->Ln(150);
$texto->Write(8,'Para 1991 aparece la primera laptop que marco tendencia hasta nuestros dias y su linea de diseño es la que vemos hoy en dia. Se trata de la primer Mac PowerBook. Se introdujo al mercado en octubre de 1991 con un precio que iba de los $2,299 dólares hasta los $4,599. El sistema operativo que traía incluido era Mac OS 7.01 y se podía actualizar a 7.6.1. La pantalla era LCD monocromática de 640 x 400 pixeles, tenía una memoria RAM de 2MB, hasta los 8MB y un almacenamiento de 20MB, hasta los 40MB (razón por la cual los precios de los equipos variaban, tal como ocurre hoy en día). Este modelo pesaba 6 kilos y fue creado por Apple en conjunto con Sony para lograr un diseño mas pequeño, “ligero” y “barato”, pero que en cuanto a rendimiento y capacidades fuera igual Apple Macintosh Portable.');


$texto->AddPage('PORTRAIT' , 'letter');
$texto->Ln(15);
$texto->SetFont('Arial', '' , 12);
$texto->Write(8,'En 1996 Toshiba creó la Toshiba Libretto 20 y era uno de los modelos más pequeños y realmente ligeros. Pesaba únicamente 840 gramos y ya tenía Windows 95 listo para trabajar. Este modelo se comercializó únicamente en Japón. Estaba equipada con un procesador AMD 485 DX4 que trabajaba a 75MHZ, de 8MB hasta 29MB de RAM y un almacenamiento interno de 270MB. Su pantalla era de 6.1 pulgadas tipo TFT.');
$texto->Ln(15);
$texto->Image('../img/00.Laptops/story4.jpg',10,80,90);
$texto->Ln(90);
$texto->Write(8,'Fue así como en 30 años se pudo llevar a manos de todos los consumidores equipos completamente portátiles, con capacidades de hasta 16GB en RAM y 1TB de almacenamiento interno. Pantallas Retina, modelos convertibles en tablets e incluso lápices ópticos o stylus para mejorar la experiencia de usuario.');

$texto->SetFont('Arial', 'B' , 12);
$texto->SetTextColor(23,220,190);
$texto->Text(70,250,'Developed By © Copyright 1999-2020');



$texto->Output();


?>