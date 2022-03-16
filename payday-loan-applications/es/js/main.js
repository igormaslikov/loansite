(function($){var form=$("#signup-form");form.steps({headerTag:"h3",bodyTag:"fieldset",transitionEffect:"fade",labels:{previous:'Prev',next:'Next',finish:'Finish',current:''},titleTemplate:'<h3 class="title">#title#</h3>',onStepChanging:function(event,currentIndex,newIndex)
{if(currentIndex===0){form.find('.content .body .step-current-content').find('.step-inner').removeClass('.step-inner-0');form.find('.content .body .step-current-content').find('.step-inner').removeClass('.step-inner-1');form.find('.content .body .step-current-content').append('<span class="step-inner step-inner-'+currentIndex+'"></span>');}
if(currentIndex===1){form.find('.content .body .step-current-content').find('.step-inner').removeClass('step-inner-0').addClass('step-inner-'+currentIndex+'');}
return true;},onFinished:function(event,currentIndex){submit();alert('Sumited');}});$(".toggle-password").on('click',function(){$(this).toggleClass("zmdi-eye zmdi-eye-off");var input=$($(this).attr("toggle"));if(input.attr("type")=="password"){input.attr("type","text");}else{input.attr("type","password");}});})(jQuery);


(function() {
    $('form > input').keyup(function() {

        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#next').attr('disabled', 'disabled');
        } else {
            $('#next').removeAttr('disabled');
        }
    });
})()