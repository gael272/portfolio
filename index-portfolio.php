<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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

    <!-- Inclure chaque section ici -->
    <?php include 'Accueil.php'; ?>
    <?php include 'Compétences.php'; ?>
    <?php include 'Formation.php'; ?>
    <?php include 'Réalisations.php'; ?>
    <?php include 'Contact.php'; ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Portfolio</p>
    </footer>
</body>
</html>