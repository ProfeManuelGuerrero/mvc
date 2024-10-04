<?php
class Nota {
    private $conn;
    private $table_name = "notas";

    public $id;
    public $nombre_estudiante;
    public $materia;
    public $nota;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Insertar nueva nota
    public function crear() {
        $query = "INSERT INTO " . $this->table_name . " (nombre_estudiante, materia, nota) VALUES (:nombre_estudiante, :materia, :nota)";
        $stmt = $this->conn->prepare($query);
        
        // Vinculando los parámetros
        $stmt->bindParam(":nombre_estudiante", $this->nombre_estudiante);
        $stmt->bindParam(":materia", $this->materia);
        $stmt->bindParam(":nota", $this->nota);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Obtener todas las notas
    public function leerTodo() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
