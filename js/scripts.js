//прелоадер
function preloader() {
    if ($('#preloader').length) {
        $('#preloader').delay(50).fadeOut(250, function() {});
    }
}

////////////////////////////////////////////////////////////
//документ не реди//////////////////////////////////////////
////////////////////////////////////////////////////////////

//jQuery.scrollSpeed(200, 800, 'easeOutCubic'); //плавная прокрутка

////////////////////////////////////////////////////////////
//документ реди/////////////////////////////////////////////
////////////////////////////////////////////////////////////
$(function() {
    //скрыть прелоадер
    preloader();
    //переключить гамбургер
    $('#nav-icon').click(function() {
        $(this).toggleClass('open');
        $('.main-menu ul li').toggleClass('menu-open'); //анимируем мобильное меню
    });
    //анимация
    $('.animated').viewportChecker({
        classToAdd: 'fadeIn', // Class to add to the elements when they are visible,
        classToRemove: 'invisible', // Class to remove before adding 'classToAdd' to the elements
        offset: 20, // The offset of the elements (let them appear earlier or later). This can also be percentage based by adding a '%' at the end
        invertBottomOffset: true, // Add the offset as a negative number to the element's bottom
        repeat: false, // Add the possibility to remove the class if the elements are not visible
        callbackFunction: function(elem, action) {}
    });

    $('.main .single img').delay(300).addClass('animated fadeIn')
    //прозрачность меню
    navbar_scroll();
    function navbar_scroll() {
    $(window).scroll(function() {
        if ($(document).scrollTop() > parseInt($('.header').css('height')) - 20) {
            $('.header').addClass('header-on-scroll');
            if ($(window).width() > 767) {
                $('.header').addClass('header-on-scroll');
            }
        } else {
            $('.header').removeClass('header-on-scroll');
            if ($(window).width() > 767) {
                $('.header').removeClass('header-on-scroll');
            }
        }
    });
    }
    //картинки на весь экран
    $("a.fnbox").fancybox({
        beforeShow: function() {}
    });
    
    // карта асинхронно
    (function () {
        if (typeof EventTarget !== 'undefined') {
        var func = EventTarget.prototype.addEventListener;
    
        EventTarget.prototype.addEventListener = function (type, fn, capture) {
            this.func = func;
            capture = capture || {};
            capture.passive = false;
            this.func(type, fn, capture);
        };
    }
    }());

    function loadMap(href){
        var winScrollTop = $(this).scrollTop();
        if (winScrollTop > scrollToElem){
            if (!q) {
            var f = document.querySelectorAll('iframe')[0];
            f.src = href;
            q= true;    
                }
            }
    }
    
    if ($('#map').length > 0) {
        var mapHref= 'https://yandex.ru/map-widget/v1/?um=constructor%3A4a9a4a6868b57d28895418a64b0ad7be75d3af90521d8488e7c28a498d4a0202&amp;source=constructor';
        var target = $('#map');
        var targetPos = target.offset().top;
        var winHeight = $(window).height();
        var scrollToElem = targetPos - winHeight;
        var q = false;
        $(window).scroll(function(){
            loadMap(mapHref);
        });
        $(function () {
            loadMap(mapHref);
        });
    }
   
    //кнопка вверх
    $(window).scroll(function() {
        if($(this).scrollTop() > $(window).height())  {
            $('#btn-up').addClass('d-block');
        } else {
            $('#btn-up').removeClass('d-block');
        }
     });
    $('#btn-up').click(function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        return false;
    });

 // Анимация текста function([string1, string2],target id,[color1,color2])    
 consoleText(['Сайт создан для моей девушки', 'С любовью'], 'text',['#181818','red']);
 function consoleText(words, id, colors) {
   if (colors === undefined) colors = ['#000'];
   var visible = true;
   var con = document.getElementById('console');
   var letterCount = 1;
   var x = 1;
   var waiting = false;
   var target = document.getElementById(id)
   target.setAttribute('style', 'color:' + colors[0])
   window.setInterval(function() {
 
     if (letterCount === 0 && waiting === false) {
       waiting = true;
       target.innerHTML = words[0].substring(0, letterCount)
       window.setTimeout(function() {
         var usedColor = colors.shift();
         colors.push(usedColor);
         var usedWord = words.shift();
         words.push(usedWord);
         x = 1;
         target.setAttribute('style', 'color:' + colors[0])
         letterCount += x;
         waiting = false;
       }, 1000)
     } else if (letterCount === words[0].length + 1 && waiting === false) {
       waiting = true;
       window.setTimeout(function() {
         x = -1;
         letterCount += x;
         waiting = false;
       }, 1000)
     } else if (waiting === false) {
       target.innerHTML = words[0].substring(0, letterCount)
       letterCount += x;
     }
   }, 120)
   window.setInterval(function() {
     if (visible === true) {
       con.className = 'console-underscore hidden'
       visible = false;
 
     } else {
       con.className = 'console-underscore'
 
       visible = true;
     }
   }, 400)
 }

// подгрузка телефона с защитой от ботов
if ($('.ajax-tel-mini').length > 0) { //для главной, где просто иконка
let tel
$.ajax({
  type: 'get',
  url: '/wp-content/themes/flawless/parts/get-tel-icon.php',
  success: (r) => {
    tel = r;
    $('.ajax-tel-mini').attr('href', tel);
  }
});
}

if ($('.ajax-tel').length > 0) {
    $('.ajax-tel').load('/wp-content/themes/flawless/parts/get-tel.php');
}
}); //конец документ реди