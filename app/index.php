<!DOCTYPE html> 
<html lang="fr"> 
 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="keywords" content="David Lindet, David, Lindet, portfolio, developer, web developer, CSS, HTML, jQuery, AJAX, PHP, HTML 5, CSS 3, Javascript, mobile, android">
    <title>David Lindet - Développeur</title>

    <meta name="description" content="Welcome on my portfolio. Here you can discover projects I worked on. Contact me if you have questions." />

    <meta property="fb:app_id" content="232095863497084">
    <meta property="og:site_name" content="David Lindet - Portfolio">
    <meta property="og:title" content="David Lindet - Portfolio">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://david-lindet.fr/">
    <meta property="og:image" content="http://david-lindet.fr/img/logo.jpg">
    <meta property="og:description" content="Welcome on my portfolio. Here you can discover projects I worked on. Contact me if you have questions.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php /*
         <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/manifest.json">
        <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php echo esc_url(get_template_directory_uri()); ?>/tpl/img/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
 */ ?>
    <link rel="stylesheet" href="./public/css/vendor.min.css" />
    <link rel="stylesheet" href="./public/css/app.min.css" />
    <link rel="icon" type="image/png" href="./public/img/favicon.png" />
</head>
 
<body>
    <?php
        $LANG = "FR";
        if(!empty($_GET['lang']) && $_GET['lang'] == "EN") {
            $LANG = "EN";
        }
    ?>

    <!-- FACEBOOK SDK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=232095863497084";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

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
        <!-- LANG BAR -->
        <div id="lang_bar">
            <a href="?lang=FR" id="FR" <?php echo $LANG == "FR" ? "class='active'" : ''; ?> title="Français" >Français</a>
            <a href="?lang=EN" id="EN" <?php echo $LANG == "EN" ? "class='active'" : ''; ?> title="English" >English</a>
        </div>
        <div id="logo" class="dlt-icon-lens"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault">
            <i class="fa fa-bars"></i>
        </button>
        <nav>
            <ul id="menu">
                <li class="active"><a href="#home"><?php echo ($LANG == "FR") ? "Accueil" : "Home" ?></a></li>
                <li><a href="#projects"><?php echo ($LANG == "FR") ? "Projets" : "Projects" ?></a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div id="networks">
            <a target="_blank" title="Facebook" href="http://www.facebook.com/Tanuki076" id="fb" class="network"><i class="fa fa-facebook"></i></a>
            <a target="_blank" title="Fickr" href="https://www.flickr.com/photos/98313907@N03/" id="fl" class="network"><i class="fa fa-flickr"></i></a>
            <a target="_blank" title="LinkedIn" href="http://www.linkedin.com/in/davidlindet" id="li" class="network"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" title="GitHub" href="https://github.com/davidlindet" id="gh" class="network"><i class="fa fa-github-alt"></i></a>
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
    <script type="text/javascript" src="./public/js/vendor.js"></script>
    <script type="text/javascript" src="./public/js/app.js"></script>

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