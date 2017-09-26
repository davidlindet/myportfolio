var portfolio = (function(jQuery) {

    var $ = jQuery;
    var isNavBarDisplayed = true;
    var pageSlideOpen = false;
    var $activeProject = null;

    /**
     * Initialize what is necessary for the good working of the website
     */
    function init(){
        initBackground();
        initNavBar();
        initLatestProjects();
        initCarrouselProjects();
        initDetailsProject();
        initZoomBox();
        initContactForm();
    }

    /**
     * Backgroung fullpage
     */
    function initBackground(){
        $.supersized({
            transition_speed:5000,
            slides:
                [
                    {image:'assets/img/background/bg.jpg'},
                    {image:'assets/img/background/bg2.jpg'},
                    {image:'assets/img/background/bg3.jpg'}
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
     * Init lastest projects
     */
    function initLatestProjects(){
        $('.latest_project').click(function(){
            var project = $(this).data('project');
            $activeProject = $(project);
            setTimeout(function(){
                $activeProject.trigger( "click" );
            },200);
        });
    }

    /**
     * Init Carrousel Projects
     */
    function initCarrouselProjects(){
        // $('#content_projects').carouFredSel({
        //     responsive: true,
        //     circular: false,
        //     infinite: false,
        //     width: '100%',
        //     scroll: { items:1, duration:500, pauseOnHover:true },
        //     items: {
        //         width: 200,
        //         visible: {
        //             min: 1,
        //             max: 3
        //         }
        //     },
        //     next:'#next',
        //     prev:'#prev'
        // });
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
        $("#projects").css("margin-left","40%");
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

    /**
     * Init Zoom Box
     */
    function initZoomBox() {
        // $('a.zoombox').zoombox({
        //     gallery : true
        // });
    }

    /**
     * Init Contact Form
     */
    function initContactForm() {
        $("#submit").click(function() {

            var data = $("form").serializeObject();

            $('#name, #subject, #email, #message').focus(function() {
                $(this).removeClass('error');
            });
            $('#error_captcha').fadeOut().html('');

            if (data.name == '') { $('#name').addClass('error'); }
            if (data.subject == '') { $('#subject').addClass('error');}
            if (data.email == '') { $('#email').addClass('error');}
            if (data.message == '') { $('#message').addClass('error');}
            if (data.recaptcha_response_field == '') { $('#recaptcha_response_field').addClass('error');}

            if ( data.name != '' && data.subject != '' && data.email != '' && data.message != '' && data.recaptcha_response_field != ''){
                $.ajax({
                    type: "POST",
                    url: "sections/contact/sendMail.php",
                    data: data,
                    beforeSend:function() {
                        $('#loading').fadeIn();
                    },
                    success: function(responseText){
                        $('#loading').fadeOut();
                        var response = $.parseJSON(responseText);
                        if(response.success){
                            $('#form').empty().append('<div id="success">'+response.message+'</div>').hide().slideDown();
                        } else {
                            $('#error_captcha').html('<div>'+response.error+'</div>').fadeIn();
                        }
                    }
                });
            }
            return false;
        });
    }

    return {
        init: init
    }
})(jQuery);

window.addEventListener("load", function() {
    //when the page is loaded, init portfolio relative scripts
    portfolio.init();
});