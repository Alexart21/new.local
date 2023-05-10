//PARALLAX
const w = document.body.clientWidth;

$(window).scroll(function(){
    parallax();
});

function parallax(){
    const scrolled = $(window).scrollTop();
    $('.bg').css('top',-(scrolled*0.1)+'px');
    $('.header-content').css('top',50+(scrolled*0.1)+'%');
    $('.header-content').css('opacity',1-(scrolled*0.01)/10);
    $('.header-content').css('opacity',1-(scrolled*0.01)/10);
};

/* Далее ф-ии */
// доставание cookie
function readCookie(name) {
    const matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
// звук
function beep(){
    let snd = new Audio("data:audio/x-wav;base64, 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");
    let promise = snd.play();
    promise.then(_ => {
        console.log('play!');
    }).catch(err => {
        console.log(err.message);
    });
}
// верхнее меню
const m = document.querySelector('.menu-wrapper'),
logo = document.querySelector('.logo-img'),
logoText= document.querySelector('.logo-text'),
    menuText = $('.top-link');

window.onscroll = () => {
    let top = $(this).scrollTop(); // сколько проскролено
    // let m = document.querySelector('.menu-wrapper')
    if (top > 150) {
        // m.animate({height: '65px'}, 300);
        m.classList.add('menu-wrapper-anim');
        logo.classList.add('logo-img-anim');
        logoText.style.marginLeft = '140px';
        logoText.style.marginTop = '-30px';
        menuText.css('text-shadow', 'none');
    } else {
        // m.animate({height: ''}, 300);
        m.classList.remove('menu-wrapper-anim');
        logo.classList.remove('logo-img-anim');
        logoText.style.marginLeft = '';
        logoText.style.marginTop = '';
        menuText.css('text-shadow', 'none');
    }
};
/**/
/* кнопка наверх */
const scr = document.getElementById('scroller');
window.addEventListener('scroll', () => {
    let top = window.pageYOffset; // сколько проскролено
    if (top > 500) {
        scr.style.display = 'block';
    } else {
        scr.style.display = 'none';
    }
});
scr.addEventListener('click', () => {
    // $('body,html').animate({scrollTop: 0}, 300);
    window.scrollTo(0, 0);
});