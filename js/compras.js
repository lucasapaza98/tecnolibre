function compras (){
    var num , nombre , marca , precioactual , precioanterior , color;

    num = document.getElementById("num").value;
    nombre = document.getElementById("nombre").value;
    marca = document.getElementById("marca").value;
    precioactual = document.getElementById("precioactual").value;
    precioanterior = document.getElementById("precioanterior").value;
    color = document.getElementById("color").value;

    if(num === "" || nombre=== "" || marca === "" ||precioactual === "" || precioanterior === "" || color === "" ){
        alert("datos obligarorios");
        return false;
    } 
    else if(num <= 0){
        alert("numero invalido");
        return false;
    }

    else if(nombre.length > 20){
        alert("nombre es muy largo");
        return false;
    }
    else if(marca.length > 20){
        alert("marca es muy larga");
        return false;
    }

    else if(precioactual.length > 50){
        alert("precio actual es muy largo");
        return false;

    }

    
    else if(precioanterior.length > 50){
        alert("precio anterior es muy largo");
        return false;

    }

    
    else if(color.length > 50){
        alert("color es muy largo");
        return false;

    }
}