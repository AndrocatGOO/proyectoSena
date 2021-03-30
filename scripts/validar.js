
function validar(){
    var nombre
    var apellidos
    var correo
    var usuario
    var contraseña
    var RepiteContra
    var expresion;
    nombre = document.getElementById("nombre").value;
    apellidos= document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    Confirmar_clave = document.getElementById("Confirmar_clave").value;

    if(nombre === " "){
        alert("El campo nombre esta vacio");
        return false;
    }
}