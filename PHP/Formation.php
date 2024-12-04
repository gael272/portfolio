<?php
$data = yaml_parse_file('DB-YAML/formation.yaml');
?>

<section id="formation">
<h2><?php echo $data['titre'];?></h2>
foreach($data['domaines'])




    <h2><?php echo $data['titre']; ?></h2>
</section>