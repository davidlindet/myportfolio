<!-- HOME -->
<section id="home" class="content section">
    <?php
        if(LANG == "FR") {
    ?>
    <h1>bienvenue <span>sur mon portfolio</span></h1>
        <p> Je m'appelle David Lindet. Développeur depuis <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> ans, j'apprécie autant le développement Front End que Back End.
            Je recherche toujours de nouvelles choses à apprendre et technologies à maîtriser.

            Ce portfolio <i>One Page</i> utilise des langages clients tel le JavaScript (avec jQuery), HTML5 & CSS3.
            Vous y trouverez les projets Web, Mobile ou Graphique sur lesquels j'ai travaillés.

            Bonne visite,

            David
        </p>
    <?php
        } else {
    ?>
        <h1>welcome <span>on my portfolio</span></h1>
        <p> My name is David Lindet. I'm a developer for the last <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> years.
            I like as Front End as Back End development.
            I always looking for new things to learn and technologies to use.

            Ce portfolio <i>One Page</i> utilise des langages clients tel le JavaScript (avec jQuery), HTML5 & CSS3.
            Vous y trouverez les projets Web, Mobile ou Graphique sur lesquels j'ai travaillés.

            Bonne visite,

            David
        </p>
    <?php
        }
    ?>
</section>