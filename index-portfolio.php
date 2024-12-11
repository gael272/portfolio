<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="css/portfolio.css">
</head>
<body>
<?php
require_once("yaml/yaml.php");

?>


    <header>
        <h1>Mon Portfolio</h1>
        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#competences">Compétences</a>
            <a href="#formation">Formation</a>
            <a href="#realisations">Réalisations</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div class="competences">
    <h2>Compétences</h2>
    <ul>
        <li>Word
            <div class="skill-bar">
                <div class="progress" style="width: 100%;">100%</div>
            </div>
        </li>
        <li>Excel
            <div class="skill-bar">
                <div class="progress" style="width: 70%;">70%</div>
            </div>
        </li>
        <li>Réseau
            <div class="skill-bar">
                <div class="progress" style="width: 50%;">50%</div>
            </div>
        </li>
        <li>Configuration DHCP & Apache
            <div class="skill-bar">
                <div class="progress" style="width: 0%;">Non spécifié</div>
            </div>
        </li>
    </ul>
</div>
    <?php include 'PHP/Accueil.php'; ?>
    <?php include 'PHP/Compétences.php'; ?>
    <?php include 'PHP/Formation.php'; ?>
    <?php include 'PHP/Réalisations.php'; ?>
    <?php include 'PHP/Contact.php'; ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Portfolio</p>
    </footer>
</body>
</html>