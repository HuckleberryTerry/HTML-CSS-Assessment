//=================================================
//Global Variables: Form
//=================================================
let $form_name = $('#name');
let $form_email = $('#email');
let $form_tel = $('#telephone');
let $form_message = $('#message');
const $form_button = $('.btn-form');
//=================================================
//Global Variables: regEx
//=================================================
const regex_email = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const regex_tel = /^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/;

//=================================================
//Test
//=================================================
// $form_email.hide();
// $form_message.hide();
// $form_name.hide();
// $form_tel.hide();

$form_button.on('click', function(event){
    if((regex_email.test($form_email.val()) && regex_tel.test($form_tel.val()))){
        //console.log('Correct');
    }
    else{
        event.preventDefault();
        //console.log('validation error');
    }

    if(!regex_email.test($form_email.val())){
        event.preventDefault();
        $form_email.css({
            "border":   "1px solid red"
        });
        //console.log('Issue with Email');
    }

    if(!regex_tel.test($form_tel.val())){
        event.preventDefault();
        $form_tel.css({
            "border":   "1px solid red"
        });
        //console.log('Issue with telephone number');
    }

    if($form_name.val() == ''){
        event.preventDefault();
        $form_name.css({
            "border":   "1px solid red"
        });
        //console.log('Issue with Name');
    }

    if($form_message.val() == ''){
        event.preventDefault();
        $form_message.css({
            "border":   "1px solid red"
        });
        //console.log('Issue with Message');
    }

});