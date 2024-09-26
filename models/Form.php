<?php

class Form
{
    public static function guardar($nombre, $email, $mensaje, $telefono)
    {
        require '../config/config.php';

        $sql = "INSERT INTO mensajes_contacto (nombre, email, mensaje, telefono) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $email, $mensaje, $telefono]);

        return true;
    }
}
?>
