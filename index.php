<?php
require_once 'controlador/NotaController.php';

// Crear instancia del controlador
$controller = new NotaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'crear') {
    // Crear una nueva nota
    $controller->crearNota($_POST['nombre'], $_POST['materia'], $_POST['nota']);
}

// Obtener todas las notas para la lista
$notas = $controller->obtenerNotas();

// Incluir la vista para ingresar y mostrar notas
include 'vista/ingreso-notas.php';
include 'vista/lista-notas.php';
?>
