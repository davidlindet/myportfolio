<!-- HOME -->
<section id="home" class="content section">
    <?php if(LANG == "FR") { ?>
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
                        Vous y trouverez les projets <b>Web, Mobile et Graphique</b> sur lesquels j'ai travaillés.
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
        </div>
    <?php
        } else {
    ?>
        <h1>welcome <span>on my portfolio</span></h1>
        <div id="content_welcome">
            <div id="portrait">
                <img src="img/content/portrait.jpg">
                <div>
                    <p>
                        My name is <b>David Lindet</b>.<br /> I've been a developer for the last <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> years. I enjoy both <b>Front End</b> and <b>Back End</b> development.
                    </p>
                    <p>
                        I'm always looking for new things to learn and technologies to use.
                        Thereby I can make my applications more ergonomic and efficient.
                    </p>
                    <p>
                        I developed this <i>One Page</i> portfolio based on Client Side languages, including <b>JavaScript (using jQuery), HTML5 & CSS3</b>.
                        You'll find Web, Mobile and Graphics projects I worked on.
                    </p>
                    <p>
                        Enjoy,
                    </p>
                    <p>
                        David
                    </p>
                </div>
                <blockquote>All our dreams can come true, if we have the courage to pursue them.<br />Walt Disney</blockquote>
            </div>
            <div id="latest_projects">
                <h2><span>my latest</span> projects</h2>
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
        </div>
    <?php } ?>
</section>