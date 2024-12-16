<?php
$data = yaml_parse_file('DB-YAML/formation.yaml');
?>

<section id="formation">
    <h2><?php echo $data['formation']['titre']; ?></h2>
    <p><?php echo $data['formation']['description']; ?></p>

    <?php if (isset($data['formation']['liste']) && is_array($data['formation']['liste'])): ?>
        <?php foreach ($data['formation']['liste'] as $formation): ?>
            <h3><?php echo $formation['titre']; ?></h3>
            <p>Établissement: <?php echo $formation['etablissement']; ?></p>
            <p>Année: <?php echo $formation['annee']; ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune formation disponible.</p>
    <?php endif; ?>

    <?php if (isset($data['image']['url'])): ?>
        <img src="<?php echo $data['image']['url']; ?>" alt="Image formation" />
    <?php endif; ?>
</section>