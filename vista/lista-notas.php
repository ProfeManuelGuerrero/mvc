<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Notas</title>
    <link rel="stylesheet" href="vista/css/styles.css">
</head>
<body>
    <h1>Lista de Notas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Estudiante</th>
                <th>Materia</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $notas->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre_estudiante']; ?></td>
                    <td><?php echo $row['materia']; ?></td>
                    <td><?php echo $row['nota']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
                