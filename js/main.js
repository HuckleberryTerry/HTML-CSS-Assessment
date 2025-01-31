//--------------------Global Variables---------------------//
const $hammedBurger = $('#hamburger-wrapper');
const $sideBar = $('.side-bar')
const $containerBody = $('.container-body');

const $cookies_policy = $('#cookie-consent');
const $cookies_accept = $('.btn-accept-cookies');
const $cookies_manage = $('.btn-cookie-settings');
const $cookies_settings = $('.btn-change-settings');

const $accred_Child = $('.partner');

const $clients_client = $('.client');

const $articles_latest = $('.latest-article');

let prevScrollPos = window.scrollY;
//--------------------Slick Carousel: Banner---------------------//
$(document).ready(function(){
    $('.content').slick({
        arrows:             false,
        dots:               true,
        pauseOnDotsHover:   true,
        pauseOnHover:       true,
        pauseOnFocus:       true,
        //autoplay:           true
    });
    // $('.description').slick({
    //     arrows:             false,
    //     dots:               false,
    //     //autoplay:           true,
    //     slidesToShow:       3,
    //     slidesToScroll:     1,
    //     infinite:           true,
    //     variableWidth:      true,
    //     swipe:              false,
    //     draggable:          false,
    //     centerMode:         true
    // });
    $('.clients-banner').slick({
        slide:              '.client',
        arrows:             false,
        dots:               false,
        autoplay:           true,
        // autoplaySpeed:      30,
        slidesToShow:       3,
        slidesToScroll:     1,
        infinite:           true,
        variableWidth:      true,
        swipe:              false,
        draggable:          false,
        centerMode:         true
    });
    $('.partners').slick({
        arrows:             false,
        dots:               false,
        autoplay:           true,
        slidesToShow:       3,
        slidesToScroll:     1,
        infinite:           true,
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
    if(currentScrollPos <= 400 || prevScrollPos <= 400){
        $('#header').removeClass('header-hidden');
        $('#header').removeClass('header-visible');
        $('#header').css({
            'position': 'relative'
        })
    }
    else if(prevScrollPos < currentScrollPos && currentScrollPos > 400){
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

function sidebarAnimate(){
    let $window_width = $(window).width();
    let $width = $sideBar.width() * -1;
    if($window_width <= 972){
        $containerBody.css('left','-275px');
    }
    else{
        //console.log($window_width);
        $containerBody.css('left','-375px');
    }
}


$hammedBurger.on('click', function(event){
    let $width = $sideBar.width() * -1;
    let $window_width = $(window).width();
    $sideBar.show();
    //$sideBar.animate({width: '275px'});
    $sideBar.addClass('active');
    $hammedBurger.addClass('open');
    //$containerBody.css('height', '100%');
    $containerBody.attr('id', 'side-lined');
    $containerBody.animate({left:$width}, 250);
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

    $(window).resize(function(){
        if($containerBody.attr('id') === 'side-lined'){
            sidebarAnimate();
        }
        else{
            $sideBar.hide();
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

//Accreditations: Image Replacement Mouse-Enter
$accred_Child.on('mouseenter', function(){
    console.log($(this).data('slickIndex'));
    let $accred_nthChild = $(this).data('slickIndex');
    if($accred_nthChild === 1 || $accred_nthChild === 13){
        $(this).find('img').attr('src', 'assets/images/Accreditations/living_wage.png');
    }
    else if($accred_nthChild === 2 || $accred_nthChild === 14){
        $(this).find('img').attr('src', 'assets/images/Accreditations/norfolk_prohelp.png');
    }
    else if($accred_nthChild === 3 || $accred_nthChild === 15){
        $(this).find('img').attr('src', 'assets/images/Accreditations/investing-in-future-growth.jpg');
    }
    else if($accred_nthChild === 4 || $accred_nthChild === 16){
        $(this).find('img').attr('src', 'assets/images/Accreditations/norfolk-carbon-charter.jpg');
    }
    else if($accred_nthChild === 5 || $accred_nthChild === 17){
        $(this).find('img').attr('src', 'assets/images/Accreditations/PPC_logo.jpg');
    }
    else if($accred_nthChild === 6){
        $(this).find('img').attr('src', 'assets/images/Accreditations/princess-royal-training.png');
    }
    else if($accred_nthChild === 7){
        $(this).find('img').attr('src', 'assets/images/Accreditations/future-50.jpg');
    }
    else if($accred_nthChild === 8 || $accred_nthChild === -4){
        $(this).find('img').attr('src', 'assets/images/Accreditations/qms.png');
    }
    else if($accred_nthChild === 9 ||  $accred_nthChild === -3){
        $(this).find('img').attr('src', 'assets/images/Accreditations/iso-27001.png');
    }
    else if($accred_nthChild === 10 || $accred_nthChild === -2){
        $(this).find('img').attr('src', 'assets/images/Accreditations/skills-of-tomorrow.jpg');
    }
    else if($accred_nthChild === 11 || $accred_nthChild === -1){
        $(this).find('img').attr('src', 'assets/images/Accreditations/cyber-essentials-colour.jpg');
    }
    else if($accred_nthChild === 12 || $accred_nthChild === 0){
        $(this).find('img').attr('src', 'assets/images/Accreditations/google-partner.jpg');
    }
    else{
        console.log('Something has gone wrong');
    }
});

//Accreditations: Image Replacement Mouse-Leave

$accred_Child.on('mouseleave', function(){
    console.log($(this).data('slickIndex'));
    let $accred_nthChild = $(this).data('slickIndex');
    if($accred_nthChild === 1 || $accred_nthChild === 13){
        $(this).find('img').attr('src', 'assets/images/Accreditations/living_wage_bw.png');
    }
    else if($accred_nthChild === 2 || $accred_nthChild === 14){
        $(this).find('img').attr('src', 'assets/images/Accreditations/norfolk_prohelp_bw.png');
    }
    else if($accred_nthChild === 3 || $accred_nthChild === 15){
        $(this).find('img').attr('src', 'assets/images/Accreditations/investing-in-future-growth-bw.jpg');
    }
    else if($accred_nthChild === 4 || $accred_nthChild === 16){
        $(this).find('img').attr('src', 'assets/images/Accreditations/norfolk-carbon-charter-bw.jpg');
    }
    else if($accred_nthChild === 5 || $accred_nthChild === 17){
        $(this).find('img').attr('src', 'assets/images/Accreditations/PPC_logo-bw.jpg');
    }
    else if($accred_nthChild === 6){
        $(this).find('img').attr('src', 'assets/images/Accreditations/princess-royal-training-bw.png');
    }
    else if($accred_nthChild === 7){
        $(this).find('img').attr('src', 'assets/images/Accreditations/future-50-bw.jpg');
    }
    else if($accred_nthChild === 8 || $accred_nthChild === -4){
        $(this).find('img').attr('src', 'assets/images/Accreditations/qms-bw.png');
    }
    else if($accred_nthChild === 9 ||  $accred_nthChild === -3){
        $(this).find('img').attr('src', 'assets/images/Accreditations/iso-27001-bw.png');
    }
    else if($accred_nthChild === 10 || $accred_nthChild === -2){
        $(this).find('img').attr('src', 'assets/images/Accreditations/skills-of-tomorrow-bw.jpg');
    }
    else if($accred_nthChild === 11 || $accred_nthChild === -1){
        $(this).find('img').attr('src', 'assets/images/Accreditations/cyber-essentials-grey.jpg');
    }
    else if($accred_nthChild === 12 || $accred_nthChild === 0){
        $(this).find('img').attr('src', 'assets/images/Accreditations/google-partner-bw.jpg');
    }
    else{
        console.log('Something has gone wrong');
    }
});


//Clients: On MouseEnter Disable Mouse Events for articles

$clients_client.on('mouseenter', function(){
    $articles_latest.css('pointer-events', 'none');
    //$('.description').css('height', '500px');
});

//Clients: On MouseLeave Enable Mouse Events for articles
$clients_client.on('mouseleave', function(){
    $articles_latest.css('pointer-events', 'all');
    //$('.description').css('height', '500px');
});


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








