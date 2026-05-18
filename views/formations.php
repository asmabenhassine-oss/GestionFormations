<?php
$pageTitle  = 'EduPro - Formations';
$formations = $formations ?? [];
$formation  = $formation  ?? null;
require 'views/partials/header.php';
?>


<?php if ($formation): ?>

    <!-- ══ PAGE DÉTAIL D'UNE FORMATION ══ -->
    <section class="section">

        <a href="index.php?page=formations" class="back-link">← Retour aux formations</a>

        <div class="detail-hero">

            <div class="detail-info">
                <div style="font-size: 60px; margin-bottom: 20px;">
                    <?= $formation['emoji'] ?? '📚' ?>
                </div>
                <span class="badge badge-<?= strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $formation['niveau'])) ?>">
                    <?= htmlspecialchars($formation['niveau']) ?>
                </span>
                <h1><?= htmlspecialchars($formation['titre']) ?></h1>
                <p><?= htmlspecialchars($formation['description']) ?></p>

                <div class="objectifs" style="margin-top: 35px;">
                    <h2>Objectifs de la formation</h2>
                    <ul>
                        <li>Comprendre les fondamentaux du domaine et maîtriser les concepts clés</li>
                        <li>Utiliser les outils professionnels les plus demandés en entreprise</li>
                        <li>Réaliser des projets concrets et pratiques tout au long de la formation</li>
                        <li>Préparer et réussir les certifications reconnues dans le secteur</li>
                        <li>Développer une expertise recherchée sur le marché du travail</li>
                    </ul>
                </div>
            </div>

            <div class="detail-card">
                <h3>Informations pratiques</h3>
                <table class="info-table">
                    <tr>
                        <td>Niveau</td>
                        <td><?= htmlspecialchars($formation['niveau']) ?></td>
                    </tr>
                    <tr>
                        <td>Durée</td>
                        <td><?= htmlspecialchars($formation['duree']) ?></td>
                    </tr>
                    <tr>
                        <td>Format</td>
                        <td><?= htmlspecialchars($formation['format'] ?? 'Présentiel') ?></td>
                    </tr>
                    <tr>
                        <td>Langue</td>
                        <td>Français</td>
                    </tr>
                    <tr>
                        <td>Certification</td>
                        <td>Incluse ✓</td>
                    </tr>
                </table>

                <div class="detail-price">
                    <?= number_format($formation['prix'], 2, ',', ' ') ?> DT
                </div>

                <a href="index.php?page=inscription&formation_id=<?= $formation['id'] ?>"
                   class="btn btn-primary"
                   style="width: 100%; display: block; text-align: center;">
                    S'inscrire à cette formation
                </a>

                <a href="index.php?page=formations"
                   style="display: block; text-align: center; margin-top: 15px;
                          color: #6366f1; text-decoration: none; font-size: 14px;">
                    ← Voir toutes les formations
                </a>
            </div>

        </div>

    </section>

<?php else: ?>

    <!-- ══ LISTE DES 4 FORMATIONS ══ -->
    <section class="section">

        <h2 class="section-title">Toutes nos Formations</h2>
        <p class="section-subtitle">
            <?= count($formations) ?> formations disponibles — Cliquez sur une formation pour voir les détails
        </p>

        <div class="formations-grid">
            <?php foreach ($formations as $f): ?>

            <div class="card" onclick="window.location='index.php?page=formations&id=<?= $f['id'] ?>'"
                 style="cursor: pointer;">

              <div class="card-image">
    <img src="https://source.unsplash.com/400x200/?<?= urlencode($f['titre']) ?>,technology"
         alt="<?= htmlspecialchars($f['titre']) ?>"
         onerror="this.style.display='none'">
    <div class="card-emoji-overlay"><?= $f['emoji'] ?? '📚' ?></div>
</div>
                <span class="badge badge-<?= strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $f['niveau'])) ?>">
                    <?= htmlspecialchars($f['niveau']) ?>
                </span>

                <h3><?= htmlspecialchars($f['titre']) ?></h3>

                <p><?= htmlspecialchars(mb_substr($f['description'], 0, 110)) ?>...</p>

                <div class="card-meta">
                    <span>⏱ <?= htmlspecialchars($f['duree']) ?></span>
                    <span>💻 <?= htmlspecialchars($f['format'] ?? 'Présentiel') ?></span>
                </div>

                <div class="card-price">
                    <?= number_format($f['prix'], 2, ',', ' ') ?> DT
                </div>

                <div class="card-buttons" onclick="event.stopPropagation()">
                    <a href="index.php?page=formations&id=<?= $f['id'] ?>"
                       class="btn-sm btn-white">
                        Voir détails
                    </a>
                    <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>"
                       class="btn-sm btn-blue">
                        S'inscrire
                    </a>
                </div>

            </div>

            <?php endforeach; ?>
        </div>

    </section>

<?php endif; ?>

<?php require 'views/partials/footer.php'; ?>