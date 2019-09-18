//Solo números con 2 decimales
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
//Filtro por si copian y pegan en el input
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}

//Ejemplo -> <input type="text" name="moneda nac" id="moneda_nac" value="10" onkeypress="return filterFloat(event,this);"/>

// Solo lertras y números.
function soloLetrasNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "abcdefghijklmnñopqrstuvwxyz0123456789";
       especiales = "8-37-39-46-13";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                
                break;
            }
        }
        // look for window.event in case event isn't passed in
        e = e || window.event;
        if (e.keyCode == 13)
        {
        document.getElementById('enviar').click();
        return false;
        }
        
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
        return true;
    }



// ejemplo-> <input type="text" onkeypress="return soloLetrasNumeros(event)" onblur="limpia()" id="miInput">
//Evento enter en login

