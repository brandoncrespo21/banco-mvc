<?php
class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = Database::conectar();
    }

    public function verificarLogin($usuario, $password) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function actualizarSaldo($id, $nuevoSaldo) {
        $stmt = $this->db->prepare("UPDATE usuarios SET saldo = ? WHERE id = ?");
        $stmt->bind_param("di", $nuevoSaldo, $id);
        return $stmt->execute();
    }
}
?>