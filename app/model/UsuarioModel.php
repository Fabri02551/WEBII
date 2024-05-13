<?php
require_once('../../core/conexion.php');

class UsuarioModel {
    

    public function registrar($email, $password) {
        global $conexion;
        $sql = "INSERT INTO usuario (email, password) VALUES (:email, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));
        return $stmt->execute();
    }
}
?>