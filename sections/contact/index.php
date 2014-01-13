<!-- CONTACT -->
<section id="contact" class="content section">
    <?php if($LANG == "FR"){ ?>
    <h1>contact <span>envoyez moi un message!</span></h1>
    <?php } else { ?>
    <h1>contact <span>send me a message!</span></h1>
    <?php } ?>
    <div id="form">

        <?php if($LANG == "FR"){ ?>
        <p>Vous avez une question? Remplissez ce formulaire pour me contacter.</p>
        <?php } else { ?>
        <p>A question? Fill that form to contact me.</p>
        <?php } ?>
        <script type="text/javascript">
            var RecaptchaOptions = {
                theme : "clean"
            };
        </script>
        <form method="post" action="">
            <input type="hidden" name="lang" value="<?php echo $LANG ?>" />
            <p><input type="text" placeholder="<?php echo ($LANG == "FR") ? "Nom" : "Name" ?>" id="name" name="name"></p>
            <p><input type="email" placeholder="Email" id="email" name="email"></p>
            <p><input type="text" placeholder="<?php echo ($LANG == "FR") ? "Sujet" : "Subject" ?>" id="subject" name="subject"></p>
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
            <p><input type="submit" value="<?php echo ($LANG == "FR") ? "Envoyer" : "Submit" ?>" id="submit" name="submit" /></p>

        </form>

    </div>

</section>