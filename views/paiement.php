<?php
$pageTitle   = 'EduPro - Paiement';
$inscription = $inscription ?? [];
require 'views/partials/header.php';
?>

<section class="paiement-section">
    <div class="paiement-container">

        <!-- TITRE -->
        <div class="paiement-header">
            <h1>💳 Paiement sécurisé</h1>
            <p>Finalisez votre inscription en toute sécurité</p>
        </div>

        <!-- RÉCAPITULATIF -->
        <div class="recap-box">
            <div class="recap-title">📋 Récapitulatif de votre commande</div>
            <div class="recap-row">
                <span>Étudiant</span>
                <strong><?= htmlspecialchars($inscription['prenom']) ?> <?= htmlspecialchars($inscription['nom']) ?></strong>
            </div>
            <div class="recap-row">
                <span>Formation</span>
                <strong><?= htmlspecialchars($inscription['formation_titre']) ?></strong>
            </div>
            <div class="recap-row recap-total">
                <span>Total à payer</span>
                <strong><?= number_format($inscription['prix'], 2, ',', ' ') ?> DT</strong>
            </div>
        </div>

        <!-- ERREUR PAIEMENT -->
        <?php if ($erreur_paiement): ?>
        <div class="alert alert-error" style="margin-bottom: 25px;">
            ❌ Paiement refusé. Vérifiez vos informations et réessayez.
        </div>
        <?php endif; ?>

        <!-- FORMULAIRE CARTE -->
        <form method="POST" action="index.php?page=paiement&id=<?= $inscription['id'] ?>">

            <!-- LOGOS CARTES -->
            <div class="card-logos">
                <div class="card-logo visa">VISA</div>
                <div class="card-logo mastercard">MC</div>
                <div class="card-logo paypal">PP</div>
            </div>

            <!-- NUMÉRO CARTE -->
            <div class="card-input-group">
                <label>Numéro de carte *</label>
                <div class="input-icon-group">
                    <span class="input-icon">💳</span>
                    <input type="text"
                           placeholder="1234  5678  9012  3456"
                           maxlength="19"
                           oninput="formatCard(this)">
                </div>
            </div>

            <!-- NOM SUR CARTE -->
            <div class="card-input-group">
                <label>Nom sur la carte *</label>
                <div class="input-icon-group">
                    <span class="input-icon">👤</span>
                    <input type="text"
                           placeholder="PRÉNOM NOM"
                           style="text-transform: uppercase;">
                </div>
            </div>

            <!-- DATE + CVV -->
            <div class="card-row">
                <div class="card-input-group">
                    <label>Date d'expiration *</label>
                    <div class="input-icon-group">
                        <span class="input-icon">📅</span>
                        <input type="text"
                               placeholder="MM/AA"
                               maxlength="5"
                               oninput="formatDate(this)">
                    </div>
                </div>
                <div class="card-input-group">
                    <label>Code CVV *</label>
                    <div class="input-icon-group">
                        <span class="input-icon">🔒</span>
                        <input type="text"
                               placeholder="123"
                               maxlength="3">
                    </div>
                </div>
            </div>

            <!-- BOUTONS SIMULATION -->
            <div class="simulation-label">
                🧪 Mode simulation — choisissez le résultat :
            </div>

            <div class="paiement-buttons">
                <button type="submit" name="mode" value="ok" class="btn-payer">
                    ✅ Simuler paiement réussi
                </button>
                <button type="submit" name="mode" value="echec" class="btn-refus">
                    ❌ Simuler paiement refusé
                </button>
            </div>

        </form>

        <!-- SÉCURITÉ -->
        <div class="securite-badges">
            <span>🔐 Paiement SSL sécurisé</span>
            <span>🛡️ Données protégées</span>
            <span>✅ Certifié PCI DSS</span>
        </div>

    </div>
</section>

<!-- JS FORMATAGE CARTE -->
<script>
function formatCard(input) {
    let value = input.value.replace(/\D/g, '');
    value = value.replace(/(.{4})/g, '$1  ').trim();
    input.value = value;
}

function formatDate(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length >= 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }
    input.value = value;
}
</script>

<?php require 'views/partials/footer.php'; ?>