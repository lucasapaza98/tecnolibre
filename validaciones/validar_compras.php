<?php

  

if(isset($_POST['agregar'])){
   
    if(empty($nombre)){
        echo '<p><font color ="red"><i>*El <b>Nombre</b> es invalido </i></font></p>';
    }
 else{
       if(strlen($nombre) > 20){
            echo '<p><font color="red"><i>*El <b>Nombre</b>es muy largo</i></font></p>';
      }
}

if(empty($marca)){
    echo '<p><font color ="red"><i>*La <b>marca</b> es inválida </i></font></p>';
} else{
    if( strlen($marca) > 20){
        echo '<p><font color ="red"><i>*La <b>marca</b> es muy larga </i></font></p>'; 
    }
}

if(empty($precioactual)){
    echo '<p><font color ="red"><i>*El <b>precio actual</b> es inválido </i></font></p>';
} else{
    if( strlen($precioactual) > 25){
        echo '<p><font color ="red"><i>*El <b>precio actual</b> es muy larga </i></font></p>'; 
    }
}


if(empty($precioanterior)){
    echo '<p><font color ="red"><i>*La <b>precio anterior</b> es inválido </i></font></p>';
} else{
    if( strlen($precioanterior) > 25){
        echo '<p><font color ="red"><i>*El <b>precio anterior</b> es muy largo </i></font></p>'; 
    }
}


if(empty($color)){
    echo '<p><font color ="red"><i>*El <b>Color</b> es inválido </i></font></p>';
} else{
    if( strlen($color) > 10){
        echo '<p><font color ="red"><i>*El <b>Color</b> es muy larga </i></font></p>'; 
    }
}





}


?>