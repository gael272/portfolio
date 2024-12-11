<?php
$data = yaml_parse_file('DB-YAML/contact.yaml');
?>

<section id="contact">
    <h2><?php echo $data['contact']['titre']; ?></h2>
    <p><?php echo $data['contact']['message']; ?></p>
    <form action="#contact" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Envoyer</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Merci, " . htmlspecialchars($_POST['name']) . "! Votre message a été envoyé.</p>";
    }
    ?>
</section>