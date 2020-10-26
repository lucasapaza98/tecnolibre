function validar(){
    var nombre, apellido, correo, usuario, clave, telefono, expresion;

    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value;

    expresion = /\w+@\w+\.+[a-z]/;
    
    if(nombre === "" || apellido === "" || correo === "" || usuario === "" || clave === "" || telefono === ""){
        alert("todos los campos son obligatorios");
        return false;
    } 
    else if(nombre.length > 50){
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellido.length > 50){
        alert("El apellido es muy largo");
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
    else if(usuario.length > 100 || clave.length > 20){
        alert("El usuario y la clave es muy largo");
        return false;
    } 
    else if (telefono.length > 30) {
        alert("el telefono es muy largo")
        return false;
    } 
    else if(isNaN(telefono)){
        alert("el telefono NO es un Numero");

        return false;
    }
  


}