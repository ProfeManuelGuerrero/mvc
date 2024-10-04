<?php
require_once 'modelo/Nota.php';
require_once 'modelo/Database.php';

class NotaController {
    private $notaModel;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->notaModel = new Nota($db);
    }

    // Guardar nueva nota
    public function crearNota($nombre_estudiante, $materia, $nota) {
        $this->notaModel->nombre_estudiante = $nombre_estudiante;
        $this->notaModel->materia = $materia;
        $this->notaModel->nota = $nota;

        return $this->notaModel->crear();
    }

    // Obtener todas las notas
    public function obtenerNotas() {
        return $this->notaModel->leerTodo();
    }
}
?>
