<!-- HOME -->
<section id="home" class="content section">
    <?php
        if(LANG == "FR") {
    ?>
        <h1>bienvenue <span>sur mon portfolio</span></h1>
        <div id="content_welcome">
            <div id="portrait">
                <img src="img/content/portrait.jpg">
                <div>
                    <p>
                        Je m'appelle <b>David Lindet</b>.<br /> Développeur depuis <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> ans, j'apprécie autant le développement <b>Front End</b> que <b>Back End</b>.
                    </p>
                    <p>
                        Je recherche toujours de nouvelles choses à apprendre et technologies à maîtriser.
                        Ceci afin de rendre mes applications plus ergonomiques et performantes.
                    </p>
                    <p>
                        Ce portfolio <i>One Page</i> utilise des langages clients tel le <b>JavaScript (avec jQuery), HTML5 & CSS3</b>.
                        Vous y trouverez les projets <b>Web, Mobile ou Graphique</b> sur lesquels j'ai travaillés.
                    </p>
                    <p>
                        Bonne visite,
                    </p>
                    <p>
                        David
                    </p>
                </div>
                <blockquote>Si nous avons le courage de les poursuivre, tous les rêves deviennent réalité.<br />Walt Disney</blockquote>
            </div>
            <div id="latest_projects">
                <h2><span>mes derniers</span> projets</h2>
                <ul>
                    <li>
                        <img src="img/projects/image2.jpg">
                    </li>
                    <li>
                        <img src="img/projects/image3.jpg">
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
    <?php
        } else {
    ?>
        <h1>welcome <span>on my portfolio</span></h1>
        <div id="content_welcome">
            <p class="col"> My name is David Lindet. I'm a developer for the last <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> years.
                I like as Front End as Back End development.
                I always looking for new things to learn and technologies to use.

                Ce portfolio <i>One Page</i> utilise des langages clients tel le JavaScript (avec jQuery), HTML5 & CSS3.
                Vous y trouverez les projets Web, Mobile ou Graphique sur lesquels j'ai travaillés.

                Bonne visite,

                David
            </p>
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec dolor neque, quis volutpat augue. Proin sapien purus, consectetur quis dictum vitae, posuere non dolor. Cras ut lectus a libero iaculis porta.</blockquote>
        </div>
    <?php
        }
    ?>
</section>