<!DOCTYPE html> 
<html lang="fr"> 
 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
    <title>David Lindet - Développeur</title>

    <meta name="description" content="This is my portfolio. Here you can discover projects I worked on. Contact me if you have questions." />
 
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/supersized.css" />
	<link rel="icon" type="image/png" href="img/favicon.png" />
	
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="scripts/lib/jquery.min.js"></script>
    <script src="scripts/lib/caroufredsel.js"></script>
    <script src="scripts/lib/pagescroller.js"></script>
    <script src="scripts/lib/supersized.js"></script>
    <script src="scripts/portfolio.js"></script>
</head>
 
<body>
    <?php const LANG = "FR"; ?>

    <div id="background-overlay"></div>

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
</body>
</html>