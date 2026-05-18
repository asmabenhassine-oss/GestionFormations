<?php

$formation_titre = $_SESSION['formation_titre'] ?? 'Développement Web Full Stack';
$etudiant_prenom = $_SESSION['etudiant_prenom'] ?? 'Étudiant';

$contenu_cours = [
    'Intelligence Artificielle' => [
        'videos' => [
            ['titre' => 'Introduction au Machine Learning',  'url' => 'https://www.youtube.com/embed/ukzFI9rgwfU', 'duree' => '12 min'],
            ['titre' => 'Les réseaux de neurones expliqués', 'url' => 'https://www.youtube.com/embed/aircAruvnKk', 'duree' => '19 min'],
            ['titre' => 'Deep Learning avec Python',         'url' => 'https://www.youtube.com/embed/VyWAvY2CF9c', 'duree' => '25 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Fondamentaux IA',    'taille' => '2.4 MB'],
            ['titre' => 'Cours 2 — Algorithmes ML',     'taille' => '3.1 MB'],
            ['titre' => 'TP — Exercices pratiques',     'taille' => '1.8 MB'],
            ['titre' => 'Projet Final — Guide',         'taille' => '0.9 MB'],
        ],
    ],
    'Data Science avec Python' => [
        'videos' => [
            ['titre' => 'Python pour la Data Science',        'url' => 'https://www.youtube.com/embed/_uQrJ0TkZlc', 'duree' => '30 min'],
            ['titre' => 'Pandas et NumPy — Tutoriel complet', 'url' => 'https://www.youtube.com/embed/vmEHCJofslg', 'duree' => '22 min'],
            ['titre' => 'Visualisation avec Matplotlib',      'url' => 'https://www.youtube.com/embed/3Xc3CA655Y4', 'duree' => '18 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Introduction Python', 'taille' => '2.1 MB'],
            ['titre' => 'Cours 2 — Pandas & NumPy',      'taille' => '2.8 MB'],
            ['titre' => 'TP — Analyse de données',       'taille' => '1.5 MB'],
            ['titre' => 'Projet Final — Dataset',        'taille' => '4.2 MB'],
        ],
    ],
    'Cybersécurité' => [
        'videos' => [
            ['titre' => 'Introduction à la Cybersécurité',  'url' => 'https://www.youtube.com/embed/inWWhr5tnEA', 'duree' => '15 min'],
            ['titre' => 'Les attaques les plus courantes',  'url' => 'https://www.youtube.com/embed/hv83-5Ue59c', 'duree' => '20 min'],
            ['titre' => 'Ethical Hacking — Bases',          'url' => 'https://www.youtube.com/embed/3Kq1MIfTWCE', 'duree' => '28 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Fondamentaux Sécurité', 'taille' => '3.2 MB'],
            ['titre' => 'Cours 2 — Protocoles réseau',     'taille' => '2.7 MB'],
            ['titre' => 'TP — Pentest basique',            'taille' => '1.9 MB'],
            ['titre' => 'Projet Final — Audit sécurité',   'taille' => '1.1 MB'],
        ],
    ],
    'Cloud Computing' => [
        'videos' => [
            ['titre' => 'Introduction au Cloud Computing', 'url' => 'https://www.youtube.com/embed/M988_fsOSWo', 'duree' => '14 min'],
            ['titre' => 'AWS — Services essentiels',       'url' => 'https://www.youtube.com/embed/a9__D53WsUs', 'duree' => '32 min'],
            ['titre' => 'Docker et conteneurisation',      'url' => 'https://www.youtube.com/embed/fqMOX6JJhGo', 'duree' => '26 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Architecture Cloud', 'taille' => '2.5 MB'],
            ['titre' => 'Cours 2 — AWS & Azure',        'taille' => '3.4 MB'],
            ['titre' => 'TP — Déploiement Cloud',       'taille' => '2.0 MB'],
            ['titre' => 'Projet Final — Infrastructure', 'taille' => '1.3 MB'],
        ],
    ],
    'Développement Web Full Stack' => [
        'videos' => [
            ['titre' => 'HTML & CSS — Les bases',        'url' => 'https://www.youtube.com/embed/qz0aGYrrlhU', 'duree' => '20 min'],
            ['titre' => 'JavaScript pour débutants',     'url' => 'https://www.youtube.com/embed/PkZNo7MFNFg', 'duree' => '45 min'],
            ['titre' => 'PHP & MySQL — Tutoriel complet','url' => 'https://www.youtube.com/embed/OK_JCtrrv-c', 'duree' => '38 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — HTML & CSS',          'taille' => '2.2 MB'],
            ['titre' => 'Cours 2 — JavaScript',          'taille' => '3.0 MB'],
            ['titre' => 'Cours 3 — PHP & MySQL',         'taille' => '3.5 MB'],
            ['titre' => 'Projet Final — Application Web','taille' => '1.6 MB'],
        ],
    ],
    'Développement Mobile' => [
        'videos' => [
            ['titre' => 'Introduction au Dev Mobile',    'url' => 'https://www.youtube.com/embed/0-S5a0eXPoc', 'duree' => '16 min'],
            ['titre' => 'React Native — Premiers pas',  'url' => 'https://www.youtube.com/embed/0DhITPJ43rE', 'duree' => '35 min'],
            ['titre' => 'Flutter — Application complète','url' => 'https://www.youtube.com/embed/x0uinJvhNxI', 'duree' => '42 min'],
        ],
        'pdfs' => [
            ['titre' => 'Cours 1 — Bases du Mobile',   'taille' => '2.3 MB'],
            ['titre' => 'Cours 2 — React Native',      'taille' => '3.2 MB'],
            ['titre' => 'TP — App Todo List',          'taille' => '1.7 MB'],
            ['titre' => 'Projet Final — App Complète', 'taille' => '2.1 MB'],
        ],
    ],
];

$cours = $contenu_cours[$formation_titre] ?? $contenu_cours['Développement Web Full Stack'];
$video_active = $cours['videos'][0];

$chapitres = [
    ['num' => 1, 'titre' => 'Introduction et mise en place',        'duree' => '2h'],
    ['num' => 2, 'titre' => 'Fondamentaux et concepts essentiels',  'duree' => '4h'],
    ['num' => 3, 'titre' => 'Pratique guidée et exercices',         'duree' => '5h'],
    ['num' => 4, 'titre' => 'Projet intermédiaire',                 'duree' => '3h'],
    ['num' => 5, 'titre' => 'Techniques avancées',                  'duree' => '6h'],
    ['num' => 6, 'titre' => 'Projet final et certification',        'duree' => '4h'],
];

require 'views/cours.php';
?>