document.getElementById("btn__iniciar-sesion").addEventListener("click",inisiarSesion);
document.getElementById("btn__registrarse").addEventListener("click",register);

//animacionlogeo-register
//varibles

var contenedor_login_register=document.querySelector(".contenedor__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
var caja_trasera_login=document.querySelector(".caja__trasera-login");
var caja_trasera_regiter=document.querySelector(".caja__trasera-register");



function inisiarSesion () {

    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="10px";
        formulario_login.style.display = "block";
        caja_trasera_regiter.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display = "block";
        caja_trasera_regiter.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register () {

    if(window.innerWidth >850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left ="410px";
        formulario_login.style.display = "none";
        caja_trasera_regiter.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display = "none";
        caja_trasera_regiter.style.display = "none";
        caja_trasera_login.style.opacity = "1";
    }
}




