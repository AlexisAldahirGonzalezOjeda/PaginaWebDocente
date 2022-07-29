function iniciar() {
    console.log("La resolución de la pantalla es: " + screen.width + " x " + screen.height);

    document.formulario.addEventListener('invalid', validacion, true);
    document.formulario.addEventListener('input', controlar, false); 
    document.getElementById('enviar').addEventListener('click', enviar, false); 
}

function validacion(e) {
    var elemento = e.target;
    elemento.style.background = '#FFDDDD';
}

function controlar(e) {
    var elemento = e.target;
    if (elemento.validity.valid) {
        elemento.style.background = '#FFFFFF';
    } else {
        elemento.style.background = '#FFDDDD';
    }
}
function enviar() {
    var valido = document.formulario.checkValidity();
    if (valido) {
        document.formulario.submit();
    }
}
  
window.addEventListener('load', iniciar, false);