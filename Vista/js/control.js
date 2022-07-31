function iniciar() {
    console.log("La resolución de la pantalla es: " + screen.width + " x " + screen.height);
    document.getElementById('checkbox1').addEventListener('click', soloUno, false);
    document.getElementById('checkbox2').addEventListener('click', soloDos, false);
}

function soloUno(e) {
    var elemento = e.target;
    elemento.checked = true;
    document.getElementById('checkbox2').checked = false;
    document.getElementById('tablaA').style.display = 'block';
    document.getElementById('tablaP').style.display = 'none';
}

function soloDos(e) {
    var elemento = e.target;
    elemento.checked = true;
    document.getElementById('checkbox1').checked = false;
    document.getElementById('tablaA').style.display = 'none';
    document.getElementById('tablaP').style.display = 'block';
}

window.addEventListener('load', iniciar, false);
