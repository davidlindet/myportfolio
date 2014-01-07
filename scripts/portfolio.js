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
        var isDisplay = true;

        $('#hide').click(function() {
            if(isDisplay){
                $('#navbar').animate({left:'-230'});
                $('#hide').animate({right:'-70'});
                $('#hide').addClass('show');
                isDisplay = false;
            }
            else {
                $('#navbar').animate({left:'0'});
                $('#hide').animate({right:'-29'});
                $('#hide').removeClass('show');
                isDisplay = true;
            }
        });
    }

    return {
        init: init
    }
})();

window.addEventListener("load", function() {
    //when the page is loaded, init portfolio relative scripts
    portfolio.init();
});