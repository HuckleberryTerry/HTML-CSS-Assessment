//--------------------Global Variables---------------------//
const $hammedBurger = $('.btn-primary-hamburger');
const $sideBar = $('.side-bar')
const $containerBody = $('.container-body');
let prevScrollPos = window.scrollY;
let cBool;
//--------------------Slick Carousel: Banner---------------------//
$(document).ready(function(){
    $('.content').slick({
        arrows:             false,
        dots:               true,
        //autoplay:           true
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
    if(currentScrollPos < 200){
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
$hammedBurger.on('click', function(event){
    $sideBar.show();
    $sideBar.addClass('active');
    $containerBody.attr('id', 'side-lined');
    $(document).on('click', function(event){
        if(event.target.id === 'side-lined'){
            $sideBar.hide();
            $sideBar.removeClass('active');
            $containerBody.removeAttr('id');
            //console.log(event.target);
        }
    })
});









