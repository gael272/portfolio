<?php
$data = yaml_parse_file('DB-YAML/accueil.yaml');

?>
<section id="accueil">
    <h2><?php echo $data['titre']; ?></h2>
    <p><?php echo $data['description']; ?></p>
    <p><?php echo $data['image']; ?></p>
</section>