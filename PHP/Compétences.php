<?php
$data = yaml_parse_file('DB-YAML/competences.yaml');
?>

<section id="competences">
    <h2><?php echo $data['titre']; ?></h2>
    <p><?php echo $data['description']; ?></p> 
    
    <?php
    foreach ($data['domaines'] as $domaine) {
        echo '<div class="competence-section">';
        echo '<div class="competence-title">' . $domaine['nom'] . '</div>';
        foreach ($domaine['competences'] as $competence) {
            $niveau = $competence['niveau'];
            
            
            $pourcentage = 0;
            switch ($niveau) {
                case 'A+': $pourcentage = 95; break;
                case 'A': $pourcentage = 85; break;
                case 'A-': $pourcentage = 75; break;
                case 'B+': $pourcentage = 65; break;
                case 'B': $pourcentage = 55; break;
                case 'C+': $pourcentage = 45; break;
                case 'C': $pourcentage = 35; break;
                default: $pourcentage = 25;
            }

            
            echo '<div class="progress-bar">';
            echo '<span>' . $competence['nom'] . '</span>';
            echo '<div class="progress"><div class="progress-fill" style="width:' . $pourcentage . '%;"></div></div>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
</section>
