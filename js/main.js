$('document').ready(function(){

    var usererror = true ;
    var emailerror = true ;
    var phoneerror = true ;
    var megerror = true ;


    $('.username').blur(function(){
        if($(this).val().length < 4){
            $(this).parent().find('.control-input').fadeIn('3000');
            $(this).css('border','2px solid red');
            $(this).parent().find('.asterisx').fadeIn('1000');
            usererror = 'true';
        }else{
            $(this).parent().find('.control-input').fadeOut('3000');
            $(this).css('border','2px solid rgb(22,162,184)');
            $(this).parent().find('.asterisx').fadeOut('1000');
            usererror = 'false';
        }
    });

    $('.email').blur(function(){
        if($(this).val() == ''){
            $(this).parent().find('.control-input').fadeIn('3000');
            $(this).css('border','2px solid red');
            $(this).parent().find('.asterisx').fadeIn('1000');
            emailerror = 'true';
        }else{
            $(this).parent().find('.control-input').fadeOut('3000');
            $(this).css('border','2px solid rgb(22,162,184)');
            $(this).parent().find('.asterisx').fadeOut('1000');
            emailerror = 'false';
        }
       
    });

    $('.phone').blur(function(){
        if($(this).val().length < 11){
            $(this).parent().find('.control-input').fadeIn('3000');
            $(this).css('border','2px solid red');
            $(this).parent().find('.asterisx').fadeIn('1000');
            phoneerror = 'true';
        }else{
            $(this).parent().find('.control-input').fadeOut('3000');
            $(this).css('border','2px solid rgb(22,162,184)');
            $(this).parent().find('.asterisx').fadeOut('1000');
            phoneerror = 'false';
        }
        
    });

    $('.meg').blur(function(){
        if($(this).val().length < 10){
            $(this).parent().find('.control-input').fadeIn('3000');
            $(this).css('border','2px solid red');
            $(this).parent().find('.asterisx').fadeIn('1000');
            megerror = 'true';
        }else{
            $(this).parent().find('.control-input').fadeOut('3000');
            $(this).css('border','2px solid rgb(22,162,184)');
            $(this).parent().find('.asterisx').fadeOut('1000');
            megerror = 'false';
        }
        
    });

    $('form').submit(function(e){
        if(usererror === true || emailerror=== true || phoneerror === true || megerror=== true ){
            e.preventDefault();
            $('.username , .email , .phone , .meg').blur();
        }

    });


});