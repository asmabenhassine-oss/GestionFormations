<?php
$nom = "benhassine";
$prenom = "Asma";
$email = "Asma.Benhassine@isetcom.tn";
$age = 20;
$ville = "tunis";
$formation = "GTIC";

?>
<!DOCTYPE html>
<html>
<head>
<title>Profil utilisateur</title>
</head>
<body>
<h1>Profil utilisateur</h1>
<p><strong>Nom :</strong> <?php echo $nom; ?></p
<p><strong>Prénom :</strong> <?php echo $prenom; ?></p>
<p><strong>Email :</strong> <?php echo $email; ?></p>
<p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
<p><strong>ville :</strong> <?php echo $ville; ?></p>
<p><strong>formation :</strong> <?php echo $formation; ?></p>
<p>bienvenue <?=$prenom?> dans la formation <?=$formation?></p>
</body>
</html>