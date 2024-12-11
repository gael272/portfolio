<?php
$data = yaml_parse_file('DB-YAML/realisations.yaml');
?>

<section id="realisations">
    <h2><?php echo $data['realisations']['titre']; ?></h2>
    <p><?php echo $data['realisations']['description']; ?></p>

    <?php if (isset($data['realisations']['projets']) && is_array($data['realisations']['projets'])): ?>
        <?php foreach ($data['realisations']['projets'] as $projet): ?>
            <div class="projet">
                <h3><?php echo $projet['titre']; ?></h3>
                <p><?php echo $projet['description']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun projet disponible.</p>
    <?php endif; ?>
</section>