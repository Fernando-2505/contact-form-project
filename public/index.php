<?php
require_once '../controllers/FormController.php';

$controller = new FormController();
$action = $_GET['action'] ?? 'mostrarFormulario';

switch ($action) {
    case 'procesarFormulario':
        $controller->procesarFormulario();
        break;
    case 'success':
        require '../view/sucess.php';
        break;
    default:
        require '../view/form.php';
        break;
}
?>
