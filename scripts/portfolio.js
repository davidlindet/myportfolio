var portfolio = (function() {

    var isNavBarDisplayed = true;
    var pageSlideOpen = false;
    var $activeProject = null;

    /**
     * Initialize what is necessary for the good working of the website
     */
    function init(){
        initBackground();
        initNavBar();
        initCarrouselProjects();
        initDetailsProject();
    }

    /**
     * Backgroung fullpage
     */
    function initBackground(){
        $.supersized({
            transition_speed:5000,
            slides:
                [
                    {image:'img/background/bg.jpg'},
                    {image:'img/background/bg2.jpg'},
                    {image:'img/background/bg3.jpg'}
                ]
        });
    }

    /**
     * Init NavBar
     */
    function initNavBar(){

        //Hide / show navbar
        $('#hide').click(function() {
            if(isNavBarDisplayed){ //Hide navbar
                $('#sidebar').animate({left:'-230px'});
                $('#hide').animate({right:'-70px'});
                $('#hide').addClass('show');
                $('.content').animate({'margin-left':'160px'});
                isNavBarDisplayed = false;
            }
            else { // show navbar
                $('#sidebar').animate({left:'0'});
                $('#hide').animate({right:'-29px'});
                $('#hide').removeClass('show');
                $('.content').animate({'margin-left':'365px'});
                isNavBarDisplayed = true;
            }
        });

        // update active section in navbar
        $('#menu li a').click(function() {
            $('#menu li').removeClass('active');
            $(this).parent().addClass('active');
        });

        // scroll when click on section in navbar
        $('body').pageScroller({ navigation: '#menu' });
    }

    /**
     * Init Carrousel Projects
     */
    function initCarrouselProjects(){
        $('#content_projects').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: { items:3, duration:2000, pauseOnHover:true },
            items: {
                width: 200,
                visible: {
                    min: 1,
                    max: 3
                }
            },
            next:'#next',
            prev:'#prev'
        });
    }

    //init details about project
    function initDetailsProject(){
        $(".slideprojects").pageslide({ direction: "left", modal: true });

        $(".slideprojects").click(function() {
            $activeProject = $(this);
            if(pageSlideOpen){ //close slide page
                hideDetailsProject();
            }
            else{ //open slide
                showDetailsProject();
            }
        });

        $('.close_project').click(function() {
            hideDetailsProject();
        });
    }

    //Show details about project (open slide)
    function showDetailsProject(){
        $("html").css("overflow", "hidden");
        $('#sidebar').animate({left: (isNavBarDisplayed) ? '-260px' : '-300px'});
        $activeProject.parent().addClass('project_active');
        $('.single_project:not(.project_active)').fadeOut();
        $("#projects").css("margin-left","990px");
        $("#content_projects").trigger("stop", true);
        pageSlideOpen = true;
    }

    //Hide details about project (hide slide)
    function hideDetailsProject(){
        $.pageslide.close();
        $(".project_active").css("left", "auto");
        $('.single_project:not(.project_active)').fadeIn();
        $('.single_project').removeClass('project_active');

        if(isNavBarDisplayed){
            $("#projects").css("margin-left","365px");
            $('#sidebar').animate({left:'0'});
        }
        else {
            $("#projects").css("margin-left","160px");
            $('#sidebar').animate({left:'-230px'});
        }
        $("html").css("overflow", "auto");
        $("#content_projects").trigger("play", true);
        pageSlideOpen = false;
    }

    return {
        init: init
    }
})();

window.addEventListener("load", function() {
    //when the page is loaded, init portfolio relative scripts
    portfolio.init();
});