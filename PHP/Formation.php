<?php
require_once 'functions/functions.php';
$data = loadData();
?>

<section id="formation">
    <h2><?php echo $data['formation']['title']; ?></h2>
    <?php foreach ($data['formation']['education'] as $edu): ?>
        <div class="education">
            <h3><?php echo $edu['degree']; ?></h3>
            <p><?php echo $edu['school'] . " (" . $edu['year'] . ")"; ?></p>
        </div>
    <?php endforeach; ?>
</section>