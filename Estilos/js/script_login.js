document.getElementById("btn__registrarse").addEventListener("click",register);

//animacionlogeo-register
//varibles

var contenedor_login_register=document.querySelector(".contenedor__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
var caja_trasera_login=document.querySelector(".caja_trasera-login");
var caja_trasera_regiter=document.querySelector(".caja_trasera-register");

function register () {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left ="410px";
    formulario_login.style.display = "none";
    caja_trasera_regiter.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}

