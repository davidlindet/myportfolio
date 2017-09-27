<!-- MY PORTFOLIO -->
<section class="single_project carousel-cell">
    <img src="./public/img/projects/myportfolio.jpg">
    <a href="#modal-portfolio" class="slideprojects" id="preview_portfolio" >
        <section class="description">
            <h2>Portfolio</h2>
            <?php if($LANG == "FR"){ ?>
                <p class="text">En <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> ans, j'ai découvert de nombreux langages et technologies.
                    Ce site web réalisé en HTML5, présente quelques uns des travaux sur lesquels j'ai travaillé...</p>
            <?php } else { ?>
                <p class="text">In the past <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> years, I discovered a lot of languages and technologies.
                This website present some of the projects I worked on...</p>
            <?php } ?>
        </section>
        <span class="more"><i class="plus-icon">+</i></span>
    </a>
    <div id="modal-portfolio" class="modal">
        <h3 class="title_pageslide">Portfolio</h3>
        <ul class="technologies" >
            <li><label>Technologies:</label></li>
            <li><a target="_blank" class="techno" id="html5" title="HTML 5" href="http://www.w3.org/TR/html51/" >HTML 5</a></li>
            <li><a target="_blank" class="techno" id="css3" title="CSS 3" href="http://www.w3.org/TR/css3-selectors/" >CSS 3</a></li>
            <li><a target="_blank" class="techno" id="php" title="Php" href="http://www.php.net/" >Php</a></li>
            <li><a target="_blank" class="techno" id="jquery" title="Jquery" href="http://jquery.com/" >Jquery</a></li>
            <li><a target="_blank" class="techno" id="photoshop" title="Photoshop" href="http://www.photoshop.com/" >Photoshop</a></li>
       </ul>
        <div class="clear"></div>
        <?php if($LANG == "FR"){ ?>
        <p>En <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> ans, j'ai découvert de nombreux langages et technologies.
           Ce site présente quelques uns des travaux sur lesquels j'ai travaillé.</p>
        <p>Depuis longtemps, j'apprécie le web. Avec l'arrivée d'HTML 5 et de CSS 3, il est possible de développer des applications aussi riches qu'en Flash, sans avoir besoin d'utiliser un logiciel tiers.</p>
        <p>C'est la raison pour laquelle j'ai décidé d'utiliser ces technologies pour développer mon Portfolio.</p>
        <p>Si vous avez des questions, n'hésitez pas à m'envoyer un message via la section contact.</p>
        <p>Code disponible sur <a href="https://github.com/davidlindet" title="GitHub">GitHub</a></p>
        <span class="close_project">Fermer</span>
        <?php } else { ?>
        <p>In the past <?php $currentYear = date('Y', time()); echo $currentYear - 2006; ?> years, I discovered a lot of languages and technologies.
            This website present some of the projects I worked on.</p>
        <p>I really enjoy working on web applications. With the advent of HTML 5 and CSS 3, it is possible to develop richer web applications without a third-party software like Flash.</p>
        <p>That's the reason why I used these technologies to develop my Portfolio.</p>
        <p>If you have any questions feel free to contact me through the contact section.</p>
        <p>Code available on <a target="_blank" href="https://github.com/davidlindet" title="GitHub">GitHub</a></p>
        <span class="close_project">Close</span>
        <?php } ?>
    </div>
</section>
<?php
 /*
<ul class="technologies" >
    <li><label>Technologies:</label></li>
    <li><a target="_blank" class="techno" id="html5" title="HTML 5" href="http://www.w3.org/TR/html51/" >HTML 5</a></li>
    <li><a target="_blank" class="techno" id="css3" title="CSS 3" href="http://www.w3.org/TR/css3-selectors/" >CSS 3</a></li>
    <li><a target="_blank" class="techno" id="php" title="Php" href="http://www.php.net/" >Php</a></li>
    <li><a target="_blank" class="techno" id="zend" title="Zend Framework" href="http://framework.zend.com/" >Zend Framework</a></li>
    <li><a target="_blank" class="techno" id="zend2" title="Zend Framework 2" href="http://framework.zend.com/" >Zend Framework 2</a></li>

    <li><a target="_blank" class="techno" id="android" title="Android" href="http://www.android.com/" >Android</a></li>
    <li><a target="_blank" class="techno" id="java" title="Java" href="http://www.java.com/" >Java</a></li>
    <li><a target="_blank" class="techno" id="jquery" title="Jquery" href="http://jquery.com/" >Jquery</a></li>
    <li><a target="_blank" class="techno" id="extjs" title="ExtJs" href="http://www.sencha.com/products/extjs/" >ExtJs</a></li>
    <li><a target="_blank" class="techno" id="fbapi" title="Facebook API" href="https://developers.facebook.com/" >Facebook API</a></li>

    <li><a target="_blank" class="techno" id="photoshop" title="Photoshop" href="http://www.photoshop.com/" >Photoshop</a></li>
    <li><a target="_blank" class="techno" id="premiere" title="Adobe Premiere" href="http://www.adobe.com/products/premiere.html" >"Adobe Premiere</a></li>
    <li><a target="_blank" class="techno" id="aftereffects" title="After Effects" href="http://www.adobe.com/products/aftereffects.html" >"After Effect</a></li>
    <li><a target="_blank" class="techno" id="blender" title="Blender" href="http://www.blender.org/" >"Blender</a></li>
    <li><a target="_blank" class="techno" id="wordpress" title="Wordpress" href="http://wordpress.org/" >"Wordpress</a></li>

    <li><a target="_blank" class="techno" id="mongo" title="MongoDB" href="http://www.mongodb.org/" >"MongoDB</a></li>
    <li><a target="_blank"  class="techno" id="sphinx" title="SphinxSearch" href="http://sphinxsearch.com/" >"SphinxSearch</a></li>
    <li><a target="_blank" class="techno" id="bootstrap" title="Bootstrap" href="http://getbootstrap.com/" >"Bootstrap</a></li>
    <li><a target="_blank" class="techno" id="mysql" title="MySQL" href="http://www.mysql.com/" >"MySQL</a></li>
    <li><a target="_blank" class="techno" id="apache" title="Apache" href="http://www.apache.org/" >"apache</a></li>
</ul>
<div class="clear"></div>

  */