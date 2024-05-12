<?php
require_once('../model/UsuarioModel.php');

class UsuarioController {
    

    public function registrar($email, $password, $confirm_password) {
        if ($password != $confirm_password) {
            echo "Las contraseñas no coinciden.";
            header("refresh:1;url=../view/registro.php");
            exit();
        }

        $model = new UsuarioModel();
        if ($model->registrar($email, $password)) {
            echo "Usuario registrado exitosamente.";
            header("refresh:1;url=../view/bienvenido.php");
        } else {
            echo "Error al registrar usuario.";
        }
    }
}

session_start();

if (isset($_POST['action'])) {
    require_once('UsuarioController.php');
    $controller = new UsuarioController();

    if ($_POST['action'] === 'login') {
        $controller->login($_POST['email'], $_POST['password']);
    } elseif ($_POST['action'] === 'registrar') {
        $controller->registrar($_POST['email'], $_POST['password'], $_POST['confirm_password']);
    }
}
?>