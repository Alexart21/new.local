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
/************/
/**/
// Окно чата/мессенджеров
window.onload = () => {
    /*let msgBlock = document.getElementById('msg-block'),
        msgContent = document.getElementById('msg-content'),
        msgImg = document.querySelector('.msg-img'),
        msgClosed = document.querySelector('.msg-closed');
    // несколько задержек
    setTimeout(showMsg, 3000); //  показываем блок с чатом
    setTimeout(showTooltip, 6000); // показываем всплывающую подсказку/приглашение
    setTimeout(rmTooltip, 14000); // скрываем подсказку
    setTimeout(rmMsgAnim, 30000); // выключаем анимацию

    msgContent.addEventListener('click', () => { // разворачиваем окно чата
        if (msgBlock.hasAttribute('data-closed')) { // свернуто
            // msgBlock.style.height = '370px';
            msgBlock.classList.add('msg-opened');
            msgBlock.style.background = 'url(/img/wats-bg.gif)';
            msgBlock.style.boxShadow = '0 0 30px #999';
            msgImg.style.right = '134px';
            msgImg.style.opacity = '0.7';
            msgClosed.style.display = 'none';
            msgBlock.removeAttribute('data-closed');
            showMsg();
        }
    });
//
    const msgClose = document.querySelector('#msg-block button');
    msgClose.addEventListener('click', () => { // сворачиваем окно чата
        if (!msgBlock.hasAttribute('data-closed')) { // окно не свернуто
            msgImg.style.right = '';
            msgImg.style.opacity = '';
            // msgBlock.style.height = '';
            msgBlock.classList.remove('msg-opened');
            msgBlock.style.background = '';
            msgBlock.style.boxShadow = '';
            msgClosed.style.display = '';
            msgBlock.setAttribute('data-closed', '');
        }
    });
//

    msgBlock.addEventListener('mouseover', () => { // по наведению мыши тож прибиваем
        rmTooltip();
    });*/

};
/* Далее ф-ии */
// показ окна чата с анимацией
const showMsg = () => {
    $('#msg-block').velocity('transition.bounceIn');
    // msgBlock.style.display = 'block';
};
//Всплывающая подсказка над чатом
const showTooltip = () => {
    // if(msgBlock.hasAttribute('data-closed') && !readCookie('msg')) {
    let promise = document.querySelector('audio').play();
    if (promise !== undefined) {
        promise.then(_ => {
            console.log('play!');
        }).catch(err => {
            console.log(err.message);
        });
    }
    $('[data-toggle="tooltip"]').tooltip('show');
    // document.cookie = "msg=1;max-age=3600;path=/"; // куку на час(в течении этого времени больше не будет всплывающих подсказок)
    // }
};
// // убиваем tooltip
const rmTooltip = () => {
    let tltp = document.querySelector('.tooltip');
    if(tltp){
        tltp.remove();
    }
};
//
const rmMsgAnim = () => { // нефиг всю дорогу мерцать
    const bar = document.querySelector('.msg-closed').classList;
    bar.remove('button-anim');
};

// доставание cookie
function readCookie(name) {
    const matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
// верхнее меню
const m = document.querySelector('.menu-wrapper'),
logo = document.querySelector('.logo-img'),
logoText= document.querySelector('.logo-text');
window.onscroll = () => {
    let top = $(this).scrollTop(); // сколько проскролено
    // let m = document.querySelector('.menu-wrapper')
    if (top > 150) {
        // m.animate({height: '65px'}, 300);
        m.classList.add('menu-wrapper-anim');
        logo.classList.add('logo-img-anim');
        logoText.style.marginLeft = '140px';
        logoText.style.marginTop = '-30px';
    } else {
        // m.animate({height: ''}, 300);
        m.classList.remove('menu-wrapper-anim');
        logo.classList.remove('logo-img-anim');
        logoText.style.marginLeft = '';
        logoText.style.marginTop = '';
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