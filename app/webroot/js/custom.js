$(document).ready(function() {
	// Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    /*$('body').click(function() {
        if($("#sidebar-wrapper").hasClass("active")) {
            $("#sidebar-wrapper").toggleClass("active");
        }
    });*/

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    $('.flash_close_btn').click(function(){
        $(".flash_message").fadeOut("slow");
    });
    /* auto resize */
    function autoResizeDiv() {
        $('body').height(window.innerHeight + 'px');
    }
    window.onresize = autoResizeDiv;
    autoResizeDiv();
});

$(document).ready(function(){
    function validate_form () {
        var error = 0;
        $('#signup_form div.form-group').each(function() {
            if($(this).hasClass('has-error')) {
                error = 1;
                $('#signup_form').find('button[type=submit]').prop('disabled', true);
            }
        });

        if(!error) {
            $('#signup_form').find('button[type=submit]').removeAttr('disabled');
        }
    }
});

  $(function() {
    $( "#datepicker" ).datepicker({
        controlType: 'select',
        timeFormat: "h:mm TT",
        ampm: true
    });
  });


/*-----------------JS Slider------------------*/

$('#slideshow').dsSlider({
  duration: 10000, // in ms
  direction: "right" // or 'left'
});


/*---------Exam script set section----*/

$(document).ready(function() {
    var current_question = $('input[name=current_question]').val();
    var total_question = $('input[name=total_question]').val();
    disable_prev_btn(current_question);

    $('.next_btn').click(function () {
        var current_question_id = "#question_" + current_question;
        $(current_question_id).hide();
        
        if(current_question == total_question) {
            $('.quiz_finish_overlay').show();
        } else {
            current_question = parseInt(current_question) + 1;
            current_question_id = "#question_" + current_question;
            $(current_question_id).show();
            disable_prev_btn(current_question);
        }
    });
});

function disable_prev_btn(current_question) {
    if(current_question == 1) {
        $('.prev_btn').addClass('disabled');
    } else {
        if($('.prev_btn').hasClass('disabled')) {
            $('.prev_btn').removeClass('disabled');
        }
    }
}


$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
        };
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#singupForm, #loginForm, #add_student_form, #add_ques_form, #create_quiz_form').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password can\'t be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password can\'t be the same as username'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password can\'t be the same as username'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
    //$('#singupForm, #loginForm, #add_student_form, #add_ques_form, #create_quiz_form').bootstrapValidator.resetForm();
});