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
        
        
        <label>
            <input type="checkbox" id="rgpd" name="rgpd" required>
            J'accepte que mes informations soient utilisées conformément à la politique de confidentialité.
        </label>
        
        
        <div class="g-recaptcha" data-sitekey="6LccLaQqAAAAAAvA_t6Tmxv_shxflIqUkNFJ06Ix"></div>
        
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $rgpd = isset($_POST['rgpd']);

       
        $captcha = $_POST['g-recaptcha-response'];
        $secretKey = "6LccLaQqAAAAAIbrPRZNofeir0amBnWppwSAGlXx";

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
        $responseKeys = json_decode($response, true);

        if ($responseKeys["success"] && $rgpd) {
            echo "<p>Merci, $name! Votre message a été envoyé.</p>";
        } elseif (!$rgpd) {
            echo "<p>Veuillez accepter les conditions RGPD pour continuer.</p>";
        } else {
            echo "<p>Le CAPTCHA est incorrect ou non validé. Veuillez réessayer.</p>";
        }
    }
    ?>
</section>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>