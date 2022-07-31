function iniciar() {
//console.log("La resolución de la pantalla es: " + screen.width + " x " + screen.height);
    document.getElementById('registroInput').addEventListener('input', datosProfesor, false);
}

function datosProfesor() {
    var elemento = document.getElementById('registroInput').value;
    if (elemento === 'Profesor') {
        document.getElementById('datosP').style.display = 'block';
        //document.getElementById('materiasInput').style.required = false;
        //document.getElementById('cargarD').style.required = false;
        //document.getElementById('turnoInput').style.required = false;
        //document.getElementById('cuenta').style.required = false; 
    } else {
        document.getElementById('datosP').style.display = 'none';
        document.getElementById('materiasInput').value = "Física";
        document.getElementById('datosP').value = "cargarD"; 
        document.getElementById('turnoInput').value = "Mañana (8am a 12am)";
        document.getElementById('cuenta').value = "null";
    }
}

window.addEventListener('load', iniciar, false);
