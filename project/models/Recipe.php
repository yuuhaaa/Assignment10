<?php
require_once 'database.php';

class Recipe {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM recipes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM recipes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $ingredients) {
        $stmt = $this->pdo->prepare("INSERT INTO recipes (name, ingredients) VALUES (?, ?)");
        $stmt->execute([$name, $ingredients]);
    }

    public function update($id, $name, $ingredients) {
        $stmt = $this->pdo->prepare("UPDATE recipes SET name = ?, ingredients = ? WHERE id = ?");
        $stmt->execute([$name, $ingredients, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM recipes WHERE id = ?");
        $stmt->execute([$id]);
    }
}
