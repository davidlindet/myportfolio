<!-- CONTACT -->
<section id="contact" class="content section">
    <h1>contact <span>envoyez moi un message!</span></h1>

    <div id="form">

        <p>Vous avez une question? Remplissez ce formulaire pour me contacter.</p>
        <script type="text/javascript">
            var RecaptchaOptions = {
                theme : "clean"
            };
        </script>
        <form method="post" action="">

            <p><input type="text" placeholder="Nom" id="name" name="name"></p>
            <p><input type="email" placeholder="Email" id="email" name="email"></p>
            <p><input type="text" placeholder="Sujet" id="subject" name="subject"></p>
            <p class="relative">
                <textarea id="message" placeholder="Message" name="message"></textarea>
                <img id="loading" src="img/small-loading.gif">
            </p>
            <?php
                require_once('sections/contact/recaptchalib.php');
                $publickey = "6LdkzewSAAAAADaz4CWBYQTE6vQdJ45wkZ6zeQb0";
                echo recaptcha_get_html($publickey);
            ?>
            <div id="error_captcha" ></div>
            <p><input type="submit" value="Envoyer" id="submit" name="submit" /></p>

        </form>

    </div>

</section>