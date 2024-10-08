<?php
require_once 'config/db.php';

class ProductsController {
    public function index() {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM products WHERE quantity > 0 ORDER BY created_at DESC");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);


    }
}
