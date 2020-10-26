function debito(){
    var numerotarjeta , nombre , mes , año , ccv ;

    numerotarjeta = document.getElementById("inputNumero").value;
    nombre = document.getElementById("inputNombre").value;
    mes= document.getElementById("selectMes").value;
    año = document.getElementById("selectYear").value;
    ccv = document.getElementById("inputCCV").value;

    if( numerotarjeta === "" || nombre === "" ||mes === "" ||año === "" || ccv === "" ){
        alert("todos los campos son obligatorios");
        return false;
    }
    else if(numerotarjeta.length > 50){
        alert("el numero de tarjeta es muy largo");
        return false
    }
    else if(nombre.length > 20){
        alert("el nombre es muy largo")
        return false;
    }
    else if(ccv.length > 30){
        alert("El CCV es muy largo");
        return false;
    }
}