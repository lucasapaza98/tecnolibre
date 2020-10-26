function validar(){
    var  correo,  clave, expresion;

    correo = document.getElementById("correo").value;
    clave = document.getElementById("clave").value;
    expresion = /\w+@\w+\.+[a-z]/;
    
    if(correo === "" || clave === "" ){
        alert("todos los campos son obligatorios");
        return false;
    } 
   
    else if(correo.length > 100){
        alert("El correo es muy largo");
        return false;
    } 

    else if(!expresion.test(correo)){
        alert("el correo no es valido");
        return false;
    }
    else if(clave.length > 20){
        alert(" la clave es muy largo");
        return false;
    } 
    
  


}