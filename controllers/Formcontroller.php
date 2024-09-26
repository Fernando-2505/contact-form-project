<?php
require_once '../models/Form.php';

class FormController
{
    public function procesarFormulario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            $telefono = $_POST['telefono'];

            // Guardar los datos en la base de datos
            if (Form::guardar($nombre, $email, $mensaje, $telefono)) {
                header('Location: index.php?action=success');
            }
        }
    }
}
?>
