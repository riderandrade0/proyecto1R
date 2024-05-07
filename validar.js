function validar() {
    var nombre, apellido, correo, usuario, clave, telefono, expresion;
    nombre=document.getElementById("nombre").value;
    nombre=document.getElementById("apellido").value;
    nombre=document.getElementById("correo").value;
    nombre=document.getElementById("usuario").value;
    nombre=document.getElementById("clave").value;
    nombre=document.getElementById("telefono").value;
    
    if(nombre ===""||apellido===""||correo ===""||usuario===""||clave===""||telefono===""){
       alert("elcampo nombre esta vacio");
    return false;
        
     }
      
     else if(nombre.length>30){
         alert("el nombre  es muy largo");
         return false;
     }
    
     else if (telefono.length > 10) {
        alert("El telefono contiene 10 digitos");
        return false;
    }
    
    
    else if (isNaN(telefono)) {
            alert("El teléfono ingresado no es un número");
            return false;
        }
}
