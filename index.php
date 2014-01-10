<!DOCTYPE html> 
<html lang="fr"> 
 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="keywords" content="David Lindet, David, Lindet, portfolio, developer, web developer, CSS, HTML, jQuery, AJAX, PHP, HTML 5, CSS 3, Javascript, mobile, android">
    <title>David Lindet - Développeur</title>

    <meta name="description" content="Welcome on my portfolio. Here you can discover projects I worked on. Contact me if you have questions." />

    <meta property="fb:app_id" content="146872648703868">
    <meta property="og:site_name" content="David Lindet - Portfolio">
    <meta property="og:title" content="David Lindet - Portfolio">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.david-lindet.fr/">
    <meta property="og:image" content="https://www.david-lindet.fr/img/logo_app.jpg">
    <meta property="og:description" content="Welcome on my portfolio. Here you can discover projects I worked on. Contact me if you have questions.">

    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/pageslide.css" />
    <link rel="stylesheet" href="styles/supersized.css" />
    <link rel="stylesheet" href="styles/zoombox.css" type="text/css" media="screen" />

    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
 
<body>
    <!-- FACEBOOK SDK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=232095863497084";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <?php const LANG = "FR"; ?>

    <div id="background_overlay"></div>

    <!-- SHARE BAR -->
    <div id="share_bar">
        <div id="share_icon"></div>
        <div class="fb-like" data-href="http://www.david-lindet.fr" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <div class="g-plusone" data-size="medium" ></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.david-lindet.fr" data-via="DLindet"></a>
    </div>

    <!-- ASIDE BAR -->
    <aside id="sidebar">
        <div class="hide" id="hide"></div>
        <div id="logo">
            <img src="img/content/logo.png">
        </div>
        <nav>
            <ul id="menu">
                <li class="active"><a href="#home"><?php echo (LANG == "FR") ? "Accueil" : "Home" ?></a></li>
                <li><a href="#projects"><?php echo (LANG == "FR") ? "Projets" : "Projects" ?></a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div id="networks">
            <a target="_blank" title="Facebook" href="http://www.facebook.com/Tanuki076" id="fb" class="network">Facebook</a>
            <a target="_blank" title="Twitter" href="https://twitter.com/DLindet" id="tw" class="network">Twitter</a>
            <a target="_blank" title="Google Plus" href="https://plus.google.com/104531589734662097658" id="gp" class="network">Google Plus</a>
            <a target="_blank" title="LinkedIn" href="http://www.linkedin.com/in/davidlindet" id="li" class="network">LinkedIn</a>
            <a target="_blank" title="GitHub" href="https://github.com/davidlindet" id="gh" class="network">GitHub</a>
        </div>
        <div id="copyright">
            <p><strong>Copyright ©2014</strong><br>Based on a tutorial of <a href="http://fr.tuto.com/formateur/spykrew07-tutos.htm">Spykrew07</a></p>
        </div>
    </aside>

    <!-- CONTENT SECTIONS -->
    <?php
        //home
        include('sections/home/index.php');
        //projects
        include('sections/projects/index.php');
        //contact
        include('sections/contact/index.php');
    ?>

    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script type="text/javascript" src="scripts/lib/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/lib/jquery.serializeObject.js"></script>
    <script type="text/javascript"  src="scripts/lib/pagescroller.js"></script>
    <script type="text/javascript" src="scripts/lib/caroufredsel.js"></script>
    <script type="text/javascript" src="scripts/lib/pageslide.js"></script>
    <script type="text/javascript" src="scripts/lib/supersized.js"></script>
    <script type="text/javascript" src="scripts/lib/zoombox.js"></script>
    <script type="text/javascript" src="scripts/portfolio.js"></script>

    <!-- Script Google + -->
    <script type="text/javascript">
        window.___gcfg = {lang: 'fr'};

        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
    <!-- twitter button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</body>
</html>