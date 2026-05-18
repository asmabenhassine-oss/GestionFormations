<?php
require_once 'models/Formation.php';

$formations = Formation::getAll();
$formation  = null;

if (isset($_GET['id'])) {
    $formation = Formation::getById((int) $_GET['id']);
    if (!$formation) {
        header('Location: index.php?page=formations');
        exit();
    }
}

if (!isset($_GET['page']) || $_GET['page'] === 'home') {
    require 'views/home.php';
} else {
    require 'views/formations.php';
}
?>