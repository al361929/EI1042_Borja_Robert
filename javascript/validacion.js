let form = document.getElementById("form");
let elements = document.getElementById("form").elements;
form.onsubmit = function(){
    for (var i = 0, element; element = elements[i++];) {
        
        if (element.type === "text"){
            if (element.value === ""){
                alert("El nombre no puede estar vacio!!!!");
                return false;
            }
            else if (element.value.length < 4){
                alert("Pon un nombre de al menos 4 caracteres!!!");
                return false;
            }      
        }
        else if(element.type === "email"){
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(element.value)){
                alert("El email es invalido!!!");
                return false;
            }
            
        }
        else if(element.type === "password"){
            if (!element.value.match(/[a-z]/g) || element.value.match(/[A-Z]/g) || element.value.match(/[0-9]/g) || element.value.match(/[^a-zA-Z\d]/g) || element.value.length >= 8){
                alert('La contraseña no cumple con los requisitos:\nUn caracter en minuscula\nUn caracter en mayuscula\nUn digito\nUn caracter especial\nLa contraseña debe tener por lo menos 8 caracteres');
                return false;
            }
        }
        
    }
    
    return true;
}


