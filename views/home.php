<?php
$pageTitle = 'EduPro - Accueil';
require 'views/partials/header.php';
?>

<!-- HERO -->
<section class="hero">

    <div class="hero-badge">
        FORMATIONS PROFESSIONNELLES CERTIFIANTES
    </div>

    <h1>
        Développez vos<br>
        <span>compétences numériques</span>
    </h1>

    <p>
        Des formations conçues avec des experts de l'industrie
        pour vous préparer aux métiers du numérique.
        Apprenez à votre rythme, obtenez un certificat reconnu.
    </p>

    <div class="hero-buttons">
        <a href="index.php?page=formations" class="btn-primary">
            🚀 Explorer les formations
        </a>
        <a href="index.php?page=inscription" class="btn-outline">
            S'inscrire gratuitement
        </a>
    </div>

</section>

<!-- STATS -->
<section class="stats">

    <div class="stat-item">
        <span class="number">1 200+</span>
        <span class="label">Étudiants formés</span>
    </div>

    <div class="stat-item">
        <span class="number"><?= count($formations) ?></span>
        <span class="label">Formations disponibles</span>
    </div>

    <div class="stat-item">
        <span class="number">99%</span>
        <span class="label">Taux de satisfaction</span>
    </div>

    <div class="stat-item">
        <span class="number">24</span>
        <span class="label">Instructeurs experts</span>
    </div>

</section>

<!-- POURQUOI NOUS -->
<section class="section">

    <h2 class="section-title">Pourquoi choisir EduPro ?</h2>
    <p class="section-subtitle">
        Une plateforme conçue pour votre réussite professionnelle
    </p>

    <div class="why-grid">

        <div class="why-card">
            <div class="why-icon">🎯</div>
            <h3>Formations ciblées</h3>
            <p>
                Chaque formation est conçue par des experts du secteur
                pour répondre aux besoins réels du marché du travail.
            </p>
        </div>

        <div class="why-card">
            <div class="why-icon">⚡</div>
            <h3>Apprentissage flexible</h3>
            <p>
                Apprenez à votre rythme, en ligne ou en présentiel,
                selon votre emploi du temps et vos contraintes.
            </p>
        </div>

        <div class="why-card">
            <div class="why-icon">🏆</div>
            <h3>Certificats reconnus</h3>
            <p>
                Obtenez des certifications reconnues par les entreprises
                et valorisez votre profil sur le marché du travail.
            </p>
        </div>

        <div class="why-card">
            <div class="why-icon">👨‍🏫</div>
            <h3>Experts instructeurs</h3>
            <p>
                Nos formateurs sont des professionnels actifs avec
                des années d'expérience dans leur domaine.
            </p>
        </div>

    </div>

    <!-- BOUTON EXPLORER -->
    <div style="text-align: center; margin-top: 70px;">
        <a href="index.php?page=formations" class="btn btn-primary"
           style="font-size: 18px; padding: 18px 50px; border-radius: 12px;">
            🚀 Explorer les <?= count($formations) ?> formations
        </a>
    </div>

</section>

<?php require 'views/partials/footer.php'; ?>