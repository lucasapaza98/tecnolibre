function ayuda(){
   var nombre , correo  , mensaje;

   nombre = document.getElementById("nombre");
   correo = document.getElementById("correo");
   mensaje = document.getElementById("mensaje");

  

   if (nombre === "" || correo === "" || mensaje === "") {
       alert("datos obligatorios");
       return false;

   } 
   else if(nombre.length > 20){
    alert("nombre es muy largo")
    return false;
   }

   else if (correo.length > 50) {
       alert("correo es muy largo");
       return false;
   }

  
    else if(mensaje.length > 50){
       alert("el mensaje es muy largo");
       return false;
   }
}