<?php
require 'includes/connexion.php';

$id = (int)($_GET['id'] ?? 0);

if ($id <= 0) {
    die('Inscription introuvable.');
}

$pdo  = getConnexion();
$stmt = $pdo->prepare(
    'SELECT i.*, f.titre, f.prix 
     FROM inscriptions i 
     JOIN formations f ON i.formation_id = f.id 
     WHERE i.id = ?'
);
$stmt->execute([$id]);
$inscription = $stmt->fetch();

if (!$inscription) {
    die('Inscription introuvable.');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paiement</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .box { border: 1px solid #ddd; padding: 20px; border-radius: 8px; max-width: 500px; }
        .prix { color: #e67e22; font-size: 1.5em; font-weight: bold; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Confirmation d'inscription</h1>
    <div class="box">
        <p class="success">✅ Inscription enregistrée avec succès !</p>
        <p><strong>Nom :</strong> <?= htmlspecialchars($inscription['prenom']) ?> <?= htmlspecialchars($inscription['nom']) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($inscription['email']) ?></p>
        <p><strong>Formation :</strong> <?= htmlspecialchars($inscription['titre']) ?></p>
        <p class="prix">Total : <?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</p>
        <p>Statut : <strong>En attente de paiement</strong></p>
        <a href="formations.php">← Retour aux formations</a>
    </div>
</body>
</html>