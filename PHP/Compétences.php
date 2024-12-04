<?php
$data = yaml_parse_file('DB-YAML\competences.yaml');
?>

<section id="competences">
    <h2><?php echo $data['titre']; ?></h2>
    <p><?php echo $data['domaines']; ?></p>
    

</section>