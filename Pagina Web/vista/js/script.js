//Ejecutando funciones
document.getElementById("iniciar_sesion").addEventListener("click", iniciarSesion);
document.getElementById("iniciar_registro").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var contenedor_log_regis = document.querySelector(".contenedor_log_regis");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja__log = document.querySelector(".caja_log");
var caja__regis = document.querySelector(".caja_regis");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        caja__regis.style.display = "block";
        caja__log.style.display = "block";
    }else{
        caja__regis.style.display = "block";
        caja__regis.style.opacity = "1";
        caja__log.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_log_regis.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();

    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            contenedor_log_regis.style.left = "10px";
            formulario_register.style.display = "none";
            caja__regis.style.opacity = "1";
            caja__log.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            contenedor_log_regis.style.left = "0px";
            formulario_register.style.display = "none";
            caja__regis.style.display = "block";
            caja__log.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            contenedor_log_regis.style.left = "410px";
            formulario_login.style.display = "none";
            caja__regis.style.opacity = "0";
            caja__log.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            contenedor_log_regis.style.left = "0px";
            formulario_login.style.display = "none";
            caja__regis.style.display = "none";
            caja__log.style.display = "block";
            caja__log.style.opacity = "1";
        }
}