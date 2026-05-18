<?php
require_once __DIR__ . '/Database.php';

class Formation {

    public static function getAll(): array {
        $pdo = Database::connect();
        return $pdo->query('SELECT * FROM formations ORDER BY id ASC')->fetchAll();
    }

    public static function getById(int $id): array|false {
        $pdo  = Database::connect();
        $stmt = $pdo->prepare('SELECT * FROM formations WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
?>