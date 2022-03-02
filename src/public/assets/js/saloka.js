let lang_from   = 0;
let lang_to     = 0;
let word_count  = 0;
let subject     = 0;
let date        = 0;
let email       = 0;
let plan_id     = 0;
let plan_price  = 0;
let dtp         = false;
let certified   = false;
let orderNow    = false;
$('.submitThisAction').click(function(){
    if(checkValid() === false) {
        toastr["warning"]("Please choose inputs");
        return;
    }
    $('.showThePlans').html('<div style="background: #00000063;width: 100%;height: 200px;color: white;font-size: 20px;font-weight: bolder;"><p style=" text-align: center; padding-top: 85px; ">Loading......</p></div>');
    $.post(_URL+'/api/order', {
        from_language_id   : $('.lang_from').val(),
        to_language_id     : $('.lang_to').val(),
        word_count         : $('.word_count').val(),
        subject_id         : $('.subject').val(),
        delivery_date      : $('.date').val(),
        email              : $('.email').val(),
        dtp                : $('.dtp').is(":checked"),
        certified          : $('.certified').is(":checked"),
        plan               : plan_id,
        plan_price         : plan_price,
        orderNow           : orderNow,
    }, function(response){ 
        if(response.status == 0) {
            toastr["error"](response.message);
            $('.showThePlans').html(' ');
        } else if(response.status == 2) {
            window.location.href = response.redirect;
        } else {
            if(response.data) {
                $('.showThePlans').html(response.data);
            }
        }
    });
    orderNow = false;
});

$(document).on('click','.selectMeNow',function(){
    plan_id = $(this).data('id');
    plan_price = $(this).data('price');
    $('.submitThisAction').click();
});

$(document).on('click','.orderNow',function(){
    orderNow = true;
    $('.submitThisAction').click();
});

function checkValid() {
    if($('.lang_from').val() == 0) {
        return false;
    }
    if($('.lang_to').val() == 0) {
        return false;
    }
    if($('.word_count').val() == 0) {
        return false;
    }
    if($('.subject').val() == 0) {
        return false;
    }
    if($('.date').val() == 0) {
        return false;
    }
    if($('.email').val() == 0) {
        return false;
    }
    return true;
}