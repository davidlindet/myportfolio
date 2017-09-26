<!-- PROJECTS -->
<section id="projects" class="content section">
    <?php if($LANG == "FR") { ?>
        <h1>projets <span>web - mobile - graphique</span></h1>
    <?php } else { ?>
        <h1>projects <span>web - mobile - graphics</span></h1>
    <?php } ?>

    <div id="content_projects"  class="carousel" >
    <?php
        //projects
        include('sections/projects/bowsmanager-angular.php');
        include('sections/projects/dlt-violins.php');
        include('sections/projects/bowsmanager.php');
        include('sections/projects/alchemyquest.php');
        include('sections/projects/shopcade.php');
        include('sections/projects/myportfolio.php');
    ?>
    </div>

</section>