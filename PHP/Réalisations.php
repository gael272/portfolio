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

                
                <?php if (isset($projet['image']) && !empty($projet['image'])): ?>
                    <img src="<?php echo $projet['image']; ?>" alt="Image de <?php echo $projet['titre']; ?>" class="projet-image" />
                <?php endif; ?>

                
                <?php if (isset($projet['pdf']) && !empty($projet['pdf'])): ?>
                    <a href="<?php echo $projet['pdf']; ?>" target="_blank">Télécharger le PDF</a>
                <?php else: ?>
                    <p>PDF non disponible.</p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun projet disponible.</p>
    <?php endif; ?>
</section>