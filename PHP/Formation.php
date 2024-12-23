<?php
$data = yaml_parse_file('DB-YAML/formation.yaml');
?>

<section id="formation">
    <h2><?php echo $data['formation']['titre']; ?></h2>
    <p><?php echo $data['formation']['description']; ?></p>

    
    <?php if (isset($data['formation']['cv_pdf'])): ?>
        <p>
            <a href="<?php echo $data['formation']['cv_pdf']; ?>" target="_blank" class="cv-link">Télécharger mon CV</a>
        </p>
    <?php endif; ?>

    
    <hr>

    <?php if (isset($data['formation']['liste']) && is_array($data['formation']['liste'])): ?>
        <?php 
        $totalFormations = count($data['formation']['liste']);
        $currentFormation = 0;
        ?>
        
        <?php foreach ($data['formation']['liste'] as $formation): ?>
            <div class="formation-item">
                <h3><?php echo $formation['titre']; ?></h3>
                <p>Établissement: <?php echo $formation['etablissement']; ?></p>
                <p>Année: <?php echo $formation['annee']; ?></p>
                <p><?php echo isset($formation['description']) ? $formation['description'] : ''; ?></p> 
                <?php if (isset($formation['image'])): ?>
                    <img src="<?php echo $formation['image']; ?>" alt="Image de <?php echo $formation['titre']; ?>" />
                <?php endif; ?>
            </div>

            <?php 
            $currentFormation++;
            
            if ($currentFormation < $totalFormations): ?>
                <hr>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune formation disponible.</p>
    <?php endif; ?>
</section>