<?php
/**
 * Page PHP minimaliste pour tester l'intégration
 */
$title = "Page PHP de test";
$phpVersion = phpversion(); // Récupère la version de PHP
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?= $title ?></title>
 <link rel="stylesheet" href="../css/style.css">
</head>
<body>
 <header>
 <h1><?= $title ?></h1>
 </header>
 <main>
 <p>Contenu dynamique généré par PHP : <?= date('Y-m-d H:i:s') ?></p>
 <p>Version de PHP : <?= $phpVersion ?></p> <!-- Affiche la version de PHP --
>
 </main>
 <footer>
 <p>© 2026 - Projet pédagogique</p>
 </footer>
</body>
</html>
