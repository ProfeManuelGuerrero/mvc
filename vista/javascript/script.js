document.getElementById('notaForm').onsubmit = function(event) {
    // Validación personalizada en JavaScript (opcional)
    var nombre = document.getElementsByName('nombre')[0].value;
    var materia = document.getElementsByName('materia')[0].value;
    var nota = document.getElementsByName('nota')[0].value;

    if (nombre === "" || materia === "" || nota === "") {
        alert("Por favor, completa todos los campos.");
        event.preventDefault();
    }
};
