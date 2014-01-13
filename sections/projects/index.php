<!-- PROJECTS -->
<section id="projects" class="content section">
    <div class="btn_slider" id="prev">&larr;</div>
    <div class="btn_slider" id="next">&rarr;</div>

    <?php if($LANG == "FR") { ?>
        <h1>projets <span>web - mobile - graphique</span></h1>
    <?php } else { ?>
        <h1>projects <span>web - mobile - graphics</span></h1>
    <?php } ?>

    <div id="content_projects">
    <?php
        //projects
        include('sections/projects/bowsmanager.php');
        include('sections/projects/alchemyquest.php');
        include('sections/projects/shopcade.php');
        include('sections/projects/myportfolio.php');
    ?>
    </div>

</section>