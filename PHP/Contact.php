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
        
        <!-- Case à cocher RGPD -->
        <div class="checkbox-container">
            <input type="checkbox" id="rgpd" name="rgpd" required>
            <label for="rgpd">J'accepte que mes informations soient utilisées conformément à la politique de confidentialité.</label>
        </div>
        
        <!-- CAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6LccLaQqAAAAAAvA_t6Tmxv_shxflIqUkNFJ06Ix"></div>
        
        <button type="submit">Envoyer</button>
    </form>

    <?php if (!empty($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
