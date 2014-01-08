var portfolio = (function() {

    /**
     * Initialize what is necessary for the good working of the website
     */
    function init(){
        initBackground();
        initNavBar();
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

        //Hide / show hide button
        var positionProjectsSection = $('#projects').position().top;
        $(window).scroll(function () {
            if ($(this).scrollTop() >= positionProjectsSection) {
                $('#hide').fadeIn();
            } else {
                $('#hide').fadeOut();
            }
        });

        //Hide / show navbar
        var isNavBar = true;
        $('#hide').click(function() {
            if(isNavBar){
                $('#sidebar').animate({left:'-230'});
                $('#hide').animate({right:'-70'});
                $('#hide').addClass('show');
                $('.content').animate({'margin-left':'160'});
                isNavBar = false;
            }
            else {
                $('#sidebar').animate({left:'0'});
                $('#hide').animate({right:'-29'});
                $('#hide').removeClass('show');
                $('.content').animate({'margin-left':'365'});
                isNavBar = true;
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

    return {
        init: init
    }
})();

window.addEventListener("load", function() {
    //when the page is loaded, init portfolio relative scripts
    portfolio.init();
});