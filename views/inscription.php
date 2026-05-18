<?php
$pageTitle = 'EduPro - Inscription';
require 'views/partials/header.php';
?>

<section class="form-section">
    <div class="form-container">
        <h1>Formulaire d'Inscription</h1>
        <p class="form-subtitle">Rejoignez notre plateforme et commencez à apprendre dès aujourd'hui</p>

        <?php if (!empty($erreurs)): ?>
        <div class="alert alert-error">
            <strong>Erreurs détectées :</strong>
            <ul>
                <?php foreach ($erreurs as $e): ?>
                <li><?= htmlspecialchars($e) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <form method="POST" action="index.php?page=inscription">

            <div class="form-row">
                <div class="form-group">
                    <label>Nom *</label>
                    <input type="text" name="nom"
                           value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>"
                           placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <label>Prénom *</label>
                    <input type="text" name="prenom"
                           value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>"
                           placeholder="Votre prénom" required>
                </div>
            </div>

            <div class="form-group">
                <label>Adresse e-mail *</label>
                <input type="email" name="email"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                       placeholder="exemple@email.com" required>
            </div>

            <div class="form-group">
                <label>Formation choisie *</label>
                <select name="formation_id" required>
                    <option value="">-- Choisir une formation --</option>
                    <?php foreach ($formations as $f): ?>
                    <option value="<?= $f['id'] ?>"
                        <?= ($formation_preselect == $f['id']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($f['titre']) ?> — <?= number_format($f['prix'], 2, ',', ' ') ?> DT
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn-submit">
                Continuer vers le paiement →
            </button>

            <p style="text-align: center; margin-top: 20px; font-size: 14px; color: #64748b;">
                <a href="index.php?page=formations" style="color: #6366f1; text-decoration: none;">
                    ← Retour aux formations
                </a>
            </p>

        </form>
    </div>
</section>

<?php require 'views/partials/footer.php'; ?>