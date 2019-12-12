document.getElementById("boton", clic, true);

function clic(){

    var numero_usuario = document.getElementById("calif").value;
    
    if(numero_usuario < 3 && numero_usuario >= 0){
        alert("Muy deficiente");
    }
    else if(numero_usuario < 5 && numero_usuario >= 3){
        alert("Insuficiente");
    }
    else if(numero_usuario < 6 && numero_usuario >= 5){
        alert("Suficiente");
    }
    else if(numero_usuario < 7 && numero_usuario >= 6){
        alert("Bien");
    }
    else if(numero_usuario < 9 && numero_usuario >= 7){
        alert("Notable");
    }
    else if(numero_usuario <= 10 && numero_usuario >= 9){
        alert("Sobresaliente");
    }
    else{
        alert("Ingrese calificacion correcta");
    }
}