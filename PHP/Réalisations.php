<?php
$data = yaml_parse_file('DB-YAML/realisations.yaml');
?>

<section id="realisations">
    <h2><?php echo $data['realisations']['title']; ?></h2>
    <div class="project-list">
        <?php foreach ($data['realisations']['projects'] as $project): ?>
            <div class="project">
                <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                <h3><?php echo $project['title']; ?></h3>
                <p><?php echo $project['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>