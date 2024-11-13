<?php
require_once 'functions/functions.php';
$data = loadData();
?>

<section id="competences">
    <h2><?php echo $data['competences']['title']; ?></h2>
    <ul>
        <?php foreach ($data['competences']['skills'] as $skill): ?>
            <li><?php echo $skill; ?></li>
        <?php endforeach; ?>
    </ul>
</section>