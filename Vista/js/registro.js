function iniciar() {
//console.log("La resolución de la pantalla es: " + screen.width + " x " + screen.height);
    document.getElementById('registroInput').addEventListener('input', datosProfesor, false);
}

function datosProfesor() {
    var elemento = document.getElementById('registroInput').value;
    if (elemento === 'Profesor') {
        document.getElementById('datosP').style.display = 'block'; 
        document.getElementById('cargarD').required = true;
        document.getElementById('materiasInput').required = true;
        document.getElementById('turnoInput').required = true;
        document.getElementById('cuenta').required = true; 
    } if (elemento === 'Alumno') {
        document.getElementById('datosP').style.display = 'none'; 
        document.getElementById('cargarD').required = false;
        document.getElementById('materiasInput').required = false;
        document.getElementById('turnoInput').required = false;
        document.getElementById('cuenta').required = false;
    }
}

window.addEventListener('load', iniciar, false);
