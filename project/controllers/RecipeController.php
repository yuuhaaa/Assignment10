<?php
require_once 'models/Recipe.php';

class RecipeController {
    private $model;

    public function __construct() {
        $this->model = new Recipe();
    }

    public function index() {
        $recipes = $this->model->getAll();
        include 'views/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST['name'], $_POST['ingredients']);
            header('Location: index.php');
        } else {
            include 'views/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST['name'], $_POST['ingredients']);
            header('Location: index.php');
        } else {
            $recipe = $this->model->getById($id);
            include 'views/edit.php';
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php');
    }
}
