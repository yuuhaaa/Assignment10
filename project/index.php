<?php
require_once 'database.php';
require_once 'controllers/RecipeController.php';

$controller = new RecipeController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if (method_exists($controller, $action)) {
    $controller->$action($id);
} else {
    echo "Action not found!";
}
