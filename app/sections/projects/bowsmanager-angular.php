<!-- BOWSMANAGER -->
<section class="single_project carousel-cell">
    <img src="./public/img/projects/bowsmanager-angular.png">
    <a href="#modal-bowsmanager-angular" class="slideprojects" id="preview_bowsmanager_angular" >
        <section class="description">
            <h2>Bows Manager - Angular Version</h2>
            <?php if($LANG == "FR"){ ?>
            <p class="text">Cette application est une nouvelle version de Bows Manager s'appuyant sur technologie Angular...</p>
            <?php } else { ?>
            <p class="text">This application is a new version of Bows Manager based on Angular...</p>
            <?php } ?>
        </section>
        <span class="more"><i class="plus-icon">+</i></span>
    </a>
    <div id="modal-bowsmanager-angular" style="display: none;">
        <h3 class="title_pageslide">Bows Manager - Angular Version</h3>
        <ul class="technologies" >
            <li><label>Technologies:</label></li>
            <li><a target="_blank" class="techno" id="html5" title="HTML 5" href="http://www.w3.org/TR/html51/" >HTML 5</a></li>
            <li><a target="_blank" class="techno" id="css3" title="CSS 3" href="http://www.w3.org/TR/css3-selectors/" >CSS 3</a></li>
            <li><a target="_blank" class="techno" id="bootstrap" title="Bootstrap 4" href="http://getbootstrap.com/" >"Bootstrap 4</a></li>
            <li><a target="_blank" class="techno" id="angular" title="Angular 4" href="https://angular.io/" >"Angular 4</a></li>
            <li><a target="_blank" class="techno" id="php" title="Php" href="http://www.php.net/" >Php 7</a></li>
            <li><a target="_blank" class="techno" id="symfony" title="Symfony 2.8" href="https://symfony.com/" >Symfony 2.8</a></li>
            <li><a target="_blank" class="techno" id="apache" title="Apache" href="http://www.apache.org/" >"apache</a></li>
            <li><a target="_blank" class="techno" id="mysql" title="MySQL" href="http://www.mysql.com/" >"MySQL</a></li>
            <li><a target="_blank" class="techno" id="photoshop" title="Photoshop" href="http://www.photoshop.com/" >Photoshop</a></li>
        </ul>
        <?php if($LANG == "FR"){ ?>
            <p>Cette application est une nouvelle version de Bows Manager s'appuyant sur technologie Angular.</p>
            <p>Elle reprend les fonctionnalités principales de la version précédente (gestion des clients, des archets, des factures...)</p>
            <p>L'architecture évolue. Elle se base sur deux Frameworks : </p>
                <ul>
                    <li><b>Angular</b> : Côté client, contient le métier de l'application</li>
                    <li><b>Symfony</b> : Côté serveur, fourni une api REST pour communiquer avec la base de donnée</li>
                </ul>
            <p>
            </p>
            <p><b>Cette application est en cours de développement</b></p>
            <p>Code disponible sur <a target="_blank" href="https://github.com/davidlindet/bowsmanager-angular" title="GitHub">GitHub</a></p>

            <span class="close_project">Fermer</span>
        <?php } else { ?>
            <p>This application is a new version of Bows Manager based on Angular.</p>
            <p>It implements mains features of the previous version (clients, bows, bills management...)</p>
            <p>The achitecture changed. Now it's based on two Frameworks : </p>
            <ul>
                <li><b>Angular</b> : client side, contains the application business</li>
                <li><b>Symfony</b> : server side, provides a REST api to communicate with the database</li>
            </ul>
            <p><b>This application is still in development</b></p>
            <p>Code available on <a target="_blank" href="https://github.com/davidlindet/bowsmanager-angular" title="GitHub">GitHub</a></p>
            <span class="close_project">Close</span>
        <?php } ?>
    </div>
</section>