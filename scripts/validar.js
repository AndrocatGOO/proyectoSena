// Validacion de El Register
function validar(){
    var nombre;
    var apellidos;
    var correo;
    var usuario;
    var contraseña;
    var confirmar_contra;
    var expresion;
    nombre = document.getElementById("nombre").value;
    apellidos= document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    contraseña = document.getElementById("contraseña").value;
    confirmar_contra = document.getElementById("confirmar_contra").value;
    
    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === " " || apellidos === " " || correo === " " || usuario === " "
    || contraseña === " "){
        alert("Los campos de nombre, apellido, correo, usuario y contraseña son obligatorios");
        return false;
    }
    else if(nombre.length>30) {
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellidos.length>30) {
        alert("Los apellidos son muy largo");
        return false;
    }
    else if(correo.length>100) {
        alert("El correo es muy largo");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es valido");
        return false;
    }
    else if(usuario.length>20) {
        alert("El usuario es muy largo");
        return false;
    }
    else if(contraseña.length>20){
        alert("La contraseña es muy larga");
        return false;
    }
    else if(contraseña === confirmar_contra){
        alert("Las contraseñas son iguales");
        alert("!Bienvenido al Sistema!");
    }
    else{
        alert("Las Contraseñas no son iguales, por favor intente de nuevo");
        return false;
    }
}
  