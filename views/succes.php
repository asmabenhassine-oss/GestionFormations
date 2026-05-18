<?php
$pageTitle = 'EduPro - Confirmation';
require 'views/partials/header.php';
$prenom = htmlspecialchars($_SESSION['etudiant_prenom'] ?? 'Étudiant');
$titre  = htmlspecialchars($_SESSION['formation_titre'] ?? 'votre formation');
?>

<section class="succes-section">
    <div class="succes-box">
        <span class="succes-icon">✅</span>
        <h1>Paiement confirmé, <?= $prenom ?> !</h1>
        <p>Votre inscription à <strong><?= $titre ?></strong> est validée.</p>
        <p>Vous pouvez maintenant accéder à vos cours.</p>
        <a href="index.php?page=cours" class="btn-primary">
            🎓 Accéder à mes cours
        </a>
    </div>
</section>

<?php require 'views/partials/footer.php'; ?>