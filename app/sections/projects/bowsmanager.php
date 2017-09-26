<!-- BOWSMANAGER -->
<section class="single_project">
    <img src="./public/img/projects/bowsmanager.jpg">
    <a href="#modal-bowsmanager" class="slideprojects" id="preview_bowsmanager" >
        <section class="description">
            <h2>Bows Manager</h2>
            <?php if($LANG == "FR"){ ?>
            <p class="text">Bows Manager est une application web permettant la gestion d'opérations sur des archets...</p>
            <?php } else { ?>
            <p class="text">Bows Manager is a Web Application to manage operations made on bows...</p>
            <?php } ?>
        </section>
        <span class="more">More</span>
    </a>
    <div id="modal-bowsmanager" style="display: none;">
        <h3 class="title_pageslide">Bows Manager</h3>
        <ul class="technologies" >
            <li><label>Technologies:</label></li>
            <li><a target="_blank" class="techno" id="html5" title="HTML 5" href="http://www.w3.org/TR/html51/" >HTML 5</a></li>
            <li><a target="_blank" class="techno" id="css3" title="CSS 3" href="http://www.w3.org/TR/css3-selectors/" >CSS 3</a></li>
            <li><a target="_blank" class="techno" id="bootstrap" title="Bootstrap" href="http://getbootstrap.com/" >"Bootstrap</a></li>
            <li><a target="_blank" class="techno" id="jquery" title="Jquery" href="http://jquery.com/" >Jquery</a></li>
            <li><a target="_blank" class="techno" id="php" title="Php" href="http://www.php.net/" >Php</a></li>
            <li><a target="_blank" class="techno" id="zend2" title="Zend Framework 2" href="http://framework.zend.com/" >Zend Framework 2</a></li>
            <li><a target="_blank" class="techno" id="apache" title="Apache" href="http://www.apache.org/" >"apache</a></li>
            <li><a target="_blank" class="techno" id="mysql" title="MySQL" href="http://www.mysql.com/" >"MySQL</a></li>
            <li><a target="_blank" class="techno" id="photoshop" title="Photoshop" href="http://www.photoshop.com/" >Photoshop</a></li>
        </ul>
        <?php if($LANG == "FR"){ ?>
            <p>Bows Manager est une application web permettant la gestion d'opérations sur des archets.</p>

            <p>Elle se compose de différents modules (Client, Collections, Archets, Factures, Fournisseurs) qui interagissent entre eux.</p>
            <p>Ainsi l'utilisateur peut gérer une liste de clients. Chaque client envoie un lot se composant d'un ou plusieurs archets.
                Lorsque toutes les opérations d'entretien et de maintenance ont été réalisées, le lot est renvoyé au client.
                Les factures peuvent être indépendantes ou attachées à un lot.
            </p>
            <p>
                Le module <i>Fournisseurs</i> est indépendant des autres. Il permet de lister les produits par fournisseur (crin, vis, plaque de tête...) et réciproquement.
                Cela permet un comparatif des prix plus rapide.
            </p>
            <p>Code disponible sur <a target="_blank" href="https://github.com/davidlindet/bowsmanager" title="GitHub">GitHub</a></p>
            <p>
                <label>Captures:</label>
                <a class="zoombox preview zgallery2" title="Page d'accueil" href="./public/img/projects/bowsmanager/home.jpg"><img width="100" src="./public/img/projects/bowsmanager/home.jpg"></a>
                <a class="zoombox preview zgallery2" title="Détails du Client" href="./public/img/projects/bowsmanager/client_details.jpg"><img width="100" src="./public/img/projects/bowsmanager/client_details.jpg"></a>
                <a class="zoombox preview zgallery2" title="Lot d'archets" href="./public/img/projects/bowsmanager/collection.jpg"><img width="100" src="./public/img/projects/bowsmanager/collection.jpg"></a>
                <a class="zoombox preview zgallery2" title="Détails de l'archet" href="./public/img/projects/bowsmanager/bow.jpg"><img width="100" src="./public/img/projects/bowsmanager/bow.jpg"></a>
            </p>
            <span class="close_project">Fermer</span>
        <?php } else { ?>
            <p>Bows Manager is a Web Application to manage operations made on bows.</p>
            <p>It's composed of mutiple modules (Client, Collections, Bows, Bills, Suppliers) interacting together.</p>
            <p>Users can manage a client list. Each client send a collection of one or several bows.
                When all maintenance operations are done, the collection is sent back.
                Bills can be independent or join to a collection.
            </p>
            <p>
                The <i>Suppliers</i> module is independent of the others. With it you can list products by suppliers (horsehair, screw, head plate...) and reciprocally.
                Thus you can compare prices faster.
            </p>
            <p>Code available on <a target="_blank" href="https://github.com/davidlindet/bowsmanager" title="GitHub">GitHub</a></p>
            <p>
                <label>Screen Captures:</label>
                <a class="zoombox preview zgallery2" title="Home Page" href="./public/img/projects/bowsmanager/home.jpg"><img width="100" src="./public/img/projects/bowsmanager/home.jpg"></a>
                <a class="zoombox preview zgallery2" title="Clients Details" href="./public/img/projects/bowsmanager/client_details.jpg"><img width="100" src="./public/img/projects/bowsmanager/client_details.jpg"></a>
                <a class="zoombox preview zgallery2" title="Collection" href="./public/img/projects/bowsmanager/collection.jpg"><img width="100" src="./public/img/projects/bowsmanager/collection.jpg"></a>
                <a class="zoombox preview zgallery2" title="Bow" href="./public/img/projects/bowsmanager/bow.jpg"><img width="100" src="./public/img/projects/bowsmanager/bow.jpg"></a>
            </p>
            <span class="close_project">Close</span>
        <?php } ?>
    </div>
</section>