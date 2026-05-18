<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'EduPro' ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="nav-logo">Edu<span>Pro</span></a>
    <ul class="nav-links">
        <li>
            <a href="index.php"
               <?= (!isset($_GET['page']) || $_GET['page'] === 'home') ? 'class="active"' : '' ?>>
                Accueil
            </a>
        </li>
        <li>
            <a href="index.php?page=formations"
               <?= (isset($_GET['page']) && $_GET['page'] === 'formations') ? 'class="active"' : '' ?>>
                Formations
            </a>
        </li>
        <li>
            <a href="index.php?page=inscription" class="btn-nav">S'inscrire</a>
        </li>
    </ul>
</nav>