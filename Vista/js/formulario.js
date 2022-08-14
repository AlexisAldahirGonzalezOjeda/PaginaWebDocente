function iniciar() {
    //console.log("La resolución de la pantalla es: " + screen.width + " x " + screen.height);
    document.getElementById('AreaInput').addEventListener('input', materia, false);



}

function materia() {
    if (document.getElementById('AreaInput').value !== '') {
        a = document.getElementById('AreaInput').value;
        alert(a);
    }

}

window.addEventListener('load', iniciar, false);


