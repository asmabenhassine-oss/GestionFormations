<?php
$pageTitle = 'EduPro - Mes Cours';
require 'views/partials/header.php';

// Contenu des cours par formation
$contenu_cours = [
    'Intelligence Artificielle' => [
        'videos' => [
            ['titre' => 'Introduction au Machine Learning',       'url' => 'https://www.youtube.com/embed/ukzFI9rgwfU', 'duree' => '12 min'],
            ['titre' => 'Les réseaux de neurones expliqués',      'url' => 'https://www.youtube.com/embed/aircAruvnKk', 'duree' => '19 min'],
            ['titre' => 'Deep Learning avec Python',              'url' => 'https://www.youtube.com/embed/VyWAvY2CF9c', 'duree' => '25 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Fondamentaux IA',             'taille' => '2.4 MB'],
            ['titre' => 'Cours 2 — Algorithmes ML',              'taille' => '3.1 MB'],
            ['titre' => 'TP — Exercices pratiques',              'taille' => '1.8 MB'],
            ['titre' => 'Projet Final — Guide',                  'taille' => '0.9 MB'],
        ],
    ],
    'Data Science avec Python' => [
        'videos' => [
            ['titre' => 'Python pour la Data Science',           'url' => 'https://www.youtube.com/embed/_uQrJ0TkZlc', 'duree' => '30 min'],
            ['titre' => 'Pandas et NumPy — Tutoriel complet',    'url' => 'https://www.youtube.com/embed/vmEHCJofslg', 'duree' => '22 min'],
            ['titre' => 'Visualisation avec Matplotlib',         'url' => 'https://www.youtube.com/embed/3Xc3CA655Y4', 'duree' => '18 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Introduction Python',        'taille' => '2.1 MB'],
            ['titre' => 'Cours 2 — Pandas & NumPy',             'taille' => '2.8 MB'],
            ['titre' => 'TP — Analyse de données réelles',      'taille' => '1.5 MB'],
            ['titre' => 'Projet Final — Dataset',               'taille' => '4.2 MB'],
        ],
    ],
    'Cybersécurité' => [
        'videos' => [
            ['titre' => 'Introduction à la Cybersécurité',       'url' => 'https://www.youtube.com/embed/inWWhr5tnEA', 'duree' => '15 min'],
            ['titre' => 'Les attaques les plus courantes',       'url' => 'https://www.youtube.com/embed/hv83-5Ue59c', 'duree' => '20 min'],
            ['titre' => 'Ethical Hacking — Bases',              'url' => 'https://www.youtube.com/embed/3Kq1MIfTWCE', 'duree' => '28 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Fondamentaux Sécurité',      'taille' => '3.2 MB'],
            ['titre' => 'Cours 2 — Protocoles réseau',          'taille' => '2.7 MB'],
            ['titre' => 'TP — Pentest basique',                 'taille' => '1.9 MB'],
            ['titre' => 'Projet Final — Audit sécurité',        'taille' => '1.1 MB'],
        ],
    ],
    'Cloud Computing' => [
        'videos' => [
            ['titre' => 'Introduction au Cloud Computing',       'url' => 'https://www.youtube.com/embed/M988_fsOSWo', 'duree' => '14 min'],
            ['titre' => 'AWS — Services essentiels',             'url' => 'https://www.youtube.com/embed/a9__D53WsUs', 'duree' => '32 min'],
            ['titre' => 'Docker et conteneurisation',            'url' => 'https://www.youtube.com/embed/fqMOX6JJhGo', 'duree' => '26 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Architecture Cloud',         'taille' => '2.5 MB'],
            ['titre' => 'Cours 2 — AWS & Azure',                'taille' => '3.4 MB'],
            ['titre' => 'TP — Déploiement Cloud',               'taille' => '2.0 MB'],
            ['titre' => 'Projet Final — Infrastructure',        'taille' => '1.3 MB'],
        ],
    ],
    'Développement Web Full Stack' => [
        'videos' => [
            ['titre' => 'HTML & CSS — Les bases',               'url' => 'https://www.youtube.com/embed/qz0aGYrrlhU', 'duree' => '20 min'],
            ['titre' => 'JavaScript pour débutants',            'url' => 'https://www.youtube.com/embed/PkZNo7MFNFg', 'duree' => '45 min'],
            ['titre' => 'PHP & MySQL — Tutoriel complet',       'url' => 'https://www.youtube.com/embed/OK_JCtrrv-c', 'duree' => '38 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — HTML & CSS',                 'taille' => '2.2 MB'],
            ['titre' => 'Cours 2 — JavaScript',                 'taille' => '3.0 MB'],
            ['titre' => 'Cours 3 — PHP & MySQL',                'taille' => '3.5 MB'],
            ['titre' => 'Projet Final — Application Web',       'taille' => '1.6 MB'],
        ],
    ],
    'Développement Mobile' => [
        'videos' => [
            ['titre' => 'Introduction au Dev Mobile',           'url' => 'https://www.youtube.com/embed/0-S5a0eXPoc', 'duree' => '16 min'],
            ['titre' => 'React Native — Premiers pas',          'url' => 'https://www.youtube.com/embed/0DhITPJ43rE', 'duree' => '35 min'],
            ['titre' => 'Flutter — Application complète',       'url' => 'https://www.youtube.com/embed/x0uinJvhNxI', 'duree' => '42 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Bases du Mobile',            'taille' => '2.3 MB'],
            ['titre' => 'Cours 2 — React Native',               'taille' => '3.2 MB'],
            ['titre' => 'TP — App Todo List',                   'taille' => '1.7 MB'],
            ['titre' => 'Projet Final — App Complète',          'taille' => '2.1 MB'],
        ],
    ],
];

// Récupérer le contenu selon la formation
$titre_formation = $_SESSION['formation_titre'] ?? 'Développement Web Full Stack';
$cours = $contenu_cours[$titre_formation] ?? $contenu_cours['Développement Web Full Stack'];
$video_active = $cours['videos'][0];
?>

<section class="cours-section">

    <!-- HEADER COURS -->
    <div class="cours-header">
        <div class="cours-header-left">
            <div class="cours-badge">🎓 Formation en cours</div>
            <h1>Bienvenue, <?= htmlspecialchars($etudiant_prenom) ?> !</h1>
            <p>📚 <?= htmlspecialchars($titre_formation) ?></p>
            <div class="cours-progress">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                </div>
                <span>0% complété</span>
            </div>
        </div>
        <div class="cours-header-stats">
            <div class="cours-stat">
                <span class="cours-stat-num"><?= count($cours['videos']) ?></span>
                <span class="cours-stat-label">Vidéos</span>
            </div>
            <div class="cours-stat">
                <span class="cours-stat-num"><?= count($cours['pdfs']) ?></span>
                <span class="cours-stat-label">PDFs</span>
            </div>
            <div class="cours-stat">
                <span class="cours-stat-num">✓</span>
                <span class="cours-stat-label">Certifié</span>
            </div>
        </div>
    </div>

    <!-- CONTENU PRINCIPAL -->
    <div class="cours-content">

        <!-- COLONNE GAUCHE — VIDÉOS -->
        <div class="cours-main">

            <h2 class="cours-section-title">🎬 Vidéos du cours</h2>

            <!-- LECTEUR VIDÉO PRINCIPAL -->
            <div class="video-player" id="main-player">
                <iframe
                    id="video-iframe"
                    src="<?= $video_active['url'] ?>"
                    title="<?= htmlspecialchars($video_active['titre']) ?>"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="video-titre-actif" id="video-titre">
                ▶ <?= htmlspecialchars($video_active['titre']) ?>
            </div>

            <!-- LISTE DES VIDÉOS -->
            <div class="video-list">
                <?php foreach ($cours['videos'] as $index => $video): ?>
                <div class="video-item <?= $index === 0 ? 'active' : '' ?>"
                     onclick="changerVideo('<?= $video['url'] ?>', '<?= htmlspecialchars($video['titre']) ?>', this)">
                    <div class="video-num"><?= $index + 1 ?></div>
                    <div class="video-info">
                        <span class="video-name"><?= htmlspecialchars($video['titre']) ?></span>
                        <span class="video-duree">⏱ <?= $video['duree'] ?></span>
                    </div>
                    <span class="video-play">▶</span>
                </div>
                <?php endforeach; ?>
            </div>

        </div>

        <!-- COLONNE DROITE — PDFs -->
        <div class="cours-sidebar">

            <h2 class="cours-section-title">📄 Documents PDF</h2>

            <div class="pdf-list">
                <?php foreach ($cours['pdfs'] as $index => $pdf): ?>
                <div class="pdf-item">
                    <div class="pdf-icon">📕</div>
                    <div class="pdf-info">
                        <span class="pdf-name"><?= htmlspecialchars($pdf['titre']) ?></span>
                        <span class="pdf-taille"><?= $pdf['taille'] ?></span>
                    </div>
                    <a href="#" class="pdf-download"
                       onclick="alert('En production, ce PDF serait téléchargeable ici !'); return false;">
                        ⬇
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- CERTIFICAT -->
            <div class=".certificat-box">
                <div style="font-size: 40px; margin-bottom: 15px;">🏆</div>
                <h3>Certificat de réussite</h3>
                <p>Complétez tous les cours pour obtenir votre certificat officiel EduPro.</p>
              <a href="assets/certificat.pdf" target="_blank">
    <button class="btn-certificat">
        Obtenir mon certificat
    </button>
</a>
            </div>

        </div>

    </div>

    <!-- CHAPITRES -->
    <div style="margin-top: 60px;">
        <h2 class="cours-section-title" style="margin-bottom: 25px;">
            📋 Programme complet
        </h2>
        <div class="cours-grid">
            <?php foreach ($chapitres as $ch): ?>
            <div class="chapitre-card">
                <div class="chapitre-left">
                    <div class="chapitre-num"><?= $ch['num'] ?></div>
                    <h3><?= htmlspecialchars($ch['titre']) ?></h3>
                </div>
                <span class="chapitre-duree">⏱ <?= $ch['duree'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div style="text-align: center; margin-top: 50px;">
        <a href="index.php" class="btn btn-primary">← Retour à l'accueil</a>
    </div>

</section>

<!-- JS CHANGEMENT VIDÉO -->
<script>
function changerVideo(url, titre, element) {
    document.getElementById('video-iframe').src = url;
    document.getElementById('video-titre').innerHTML = '▶ ' + titre;
    document.querySelectorAll('.video-item').forEach(el => el.classList.remove('active'));
    element.classList.add('active');
}
</script>

<?php require 'views/partials/footer.php'; ?>