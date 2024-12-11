//--------------------Global Variables---------------------//
const $hammedBurger = $('#hamburger-wrapper');
const $sideBar = $('.side-bar')
const $containerBody = $('.container-body');

const $cookies_policy = $('#cookie-consent');
const $cookies_accept = $('.btn-accept-cookies');
const $cookies_manage = $('.btn-cookie-settings');
const $cookies_settings = $('.btn-change-settings');


let prevScrollPos = window.scrollY;
//--------------------Slick Carousel: Banner---------------------//
$(document).ready(function(){
    $('.content').slick({
        arrows:             false,
        dots:               true,
        pauseOnDotsHover:   true,
        pauseOnHover:       true,
        pauseOnFocus:       true,
        autoplay:           true
    });
    $('.clients-banner').slick({
        arrows:             false,
        dots:               false,
        autoplay:           true,
        slidesToShow:       3,
        slidesToScroll:     1,
        infinite:           true,
        centerMode:         true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false
    });
    $('.partners').slick({
        arrows:             false,
        dots:               false,
        autoplay:           true,
        slidesToShow:       3,
        slidesToScroll:     1,
        infinite:           true,
        centerMode:         true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false
    });
});


// function openNav(){
//     //$containerBody.attr('onClick', 'closeNav()');
//     if($sideBar.hasClass('active')){
//         $containerBody.on('click', function(event){
//             $containerBody.removeClass('side-lined');
//             $sideBar.removeClass('active');
//             console.log(event.target);
//         })
//     }
//     else{
//         $sideBar.show();
//         $sideBar.addClass('active');
//         $containerBody.addClass('side-lined');
//     }
// }

//--------------------EVENT HANDLERS & FUNCTIONS---------------------//

//Sticky Header: OnScroll Event
window.onscroll = function(){
    let currentScrollPos = window.scrollY;
    console.log(currentScrollPos);
    if(currentScrollPos < 400){
        $('#header').removeAttr('class');
    }
    else if(prevScrollPos < currentScrollPos){
        $('#header').css({
            'position': 'sticky'
        })
        setTimeout(()=>{
            document.getElementById('header').classList.add('header-hidden');
            document.getElementById('header').classList.remove('header-visible');
        }, 300);
    }
    else{
        $('#header').css({
            'position': 'sticky'
        })
        setTimeout(()=>{
            document.getElementById('header').classList.add('header-visible');
            document.getElementById('header').classList.remove('header-hidden');
        }, 300);
    }
    prevScrollPos = currentScrollPos;
}

//Side Menu: Button On Click Event
//Currently works in practice, I would like to implement a version of this that uses
//Promises or Async JS to ensure that the stack doesn't get clogged with JS Animation Calls.

$hammedBurger.on('click', function(event){
    $sideBar.show();
    //$sideBar.animate({width: '275px'});
    $sideBar.addClass('active');
    $hammedBurger.addClass('open');
    //$containerBody.css('height', '100%');
    $containerBody.attr('id', 'side-lined');
    $containerBody.animate({left:'-275px'}, 250);
    $(document).on('click', function(event){
        if(event.target.id === 'side-lined'){
            //$sideBar.animate({width: '-275px'});
            $containerBody.animate({left: '0'}, 250);
            $hammedBurger.removeClass('open');
            //$sideBar.hide();
            $containerBody.removeAttr('id');
            //$containerBody.css('height', '600px');
            $sideBar.removeClass('active');
            //console.log(event.target);
        }
    })
});

// $hammedBurger.on('click', function(event){
//     $sideBar.show();
//     $sideBar.animate({width: '275px'});
//     $sideBar.addClass('active');
//     $hammedBurger.addClass('open');
//     $containerBody.attr('id', 'side-lined');
//     $containerBody.animate({left:'-275px'});
//     $(document).on('click', function(event){
//         if(event.target.id === 'side-lined'){
//             //$sideBar.hide();
//             $sideBar.animate({width: '-275px'});
//             $containerBody.animate({left: '0'});
//             $sideBar.removeClass('active');
//             $hammedBurger.removeClass('open');
//             setTimeout(()=>{
//                 $containerBody.removeAttr('id');
//             }, 415);
//             //console.log(event.target);
//         }
//     })
// });



//Cookies: Check Accept

if(localStorage.getItem('cBool') === null){
    $cookies_policy.show();
}
else{
    $cookies_policy.hide();
    $cookies_manage.show();
}


//Cookies: Set Accept
$cookies_accept.on('click', function(){
    $cookies_policy.hide();
    localStorage.setItem("cBool", "true");
});

//Cookies: Manage Consent
$cookies_manage.on('click', function(){
    $cookies_policy.show();
});

//Cookies: Cookie Settings
$cookies_settings.on('click', function(){
    $cookies_policy.hide();
});








