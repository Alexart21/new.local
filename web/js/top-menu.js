$(document).ready(function () {


    /* the Responsive menu script */
    $('body').addClass('js');
    let $menu = $('#menu'),
        $menulink = $('.menu-link'),
        $menuTrigger = $('.has-subnav > a')
        $logoBlock = $('.m-logo-block');

    $menulink.click(function (e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
    });

    $logoBlock.click(function (e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
    });

    let add_toggle_links = function () {
        if ($('.menu-link').is(":visible")) {
            if ($(".toggle-link").length > 0) {
            } else {
                $('.has-subnav > a').before('<span class="toggle-link"> Open submenu </span>');
                $('.toggle-link').click(function (e) {
                    console.log('submenu');
                    let $this = $(this);
                    $this.toggleClass('active').siblings('ul').toggleClass('active');
                });
                /*$('.has-subnav').click(function (e) {
                    console.log('submenu');
                    let $this = $(this);
                    $this.toggleClass('active').siblings('ul').toggleClass('active');
                });*/
            }
        } else {
            $('.toggle-link').empty();
        }
    }
    add_toggle_links();
    $(window).bind("resize", add_toggle_links);

});
/*****************************/