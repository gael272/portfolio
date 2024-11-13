<?php
require_once 'functions/functions.php';
$data = loadData();
?>

<section id="accueil">
    <h2><?php echo $data['accueil']['title']; ?></h2>
    <p><?php echo $data['accueil']['description']; ?></p>
</section>