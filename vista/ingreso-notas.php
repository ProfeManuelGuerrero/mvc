<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Notas</title>
    <link rel="stylesheet" href="vista/css/styles.css">
</head>
<body>
    <h1>Ingreso de Notas</h1>
    <form id="notaForm" method="POST" action="index.php?action=crear">
        <label for="nombre">Nombre del Estudiante:</label>
        <input type="text" name="nombre" required><br>

        <label for="materia">Materia:</label>
        <input type="text" name="materia" required><br>

        <label for="nota">Nota:</label>
        <input type="number" name="nota" step="0.01" required><br>

        <input type="submit" value="Guardar Nota">
    </form>
    <script src="vista/javascript/script.js"></script>
</body>
</html>
