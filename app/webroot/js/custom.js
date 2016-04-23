var timeout;

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

// clear form after reloading
function clearInp() {
    document.getElementsByTagName("input").value = "";
}


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
    var current_question_id = "";

    var exam_running = $('input[name=exam_running]').val();
    console.log(exam_running);
    if(exam_running==1) {
        start_counting();
    }

    $('.next_btn').click(function () {
        current_question_id = "#question_" + current_question;
        $(current_question_id).hide();
        if(current_question == total_question) {
            $('.quiz_finish_overlay').show();
        } else {
            current_question = parseInt(current_question) + 1;
            current_question_id = "#question_" + current_question;
            $(current_question_id).show();
            disable_prev_btn(current_question);

            update_current_question_showing (current_question);
        }
    });

    $('.prev_btn').click(function () {
        var current_question_id = "#question_" + current_question;
        if(current_question!=0){
            $(current_question_id).hide();
            current_question = parseInt(current_question) - 1;
            current_question_id = "#question_" + current_question;
            $(current_question_id).show();
            disable_prev_btn(current_question);

            update_current_question_showing (current_question);
        }
    });

    $('#review_btn').click(function(){
        $('.quiz_finish_overlay').hide();
        current_question = 0;
        current_question_id = "#question_" + current_question;
        $(current_question_id).show();
        disable_prev_btn(current_question);

        update_current_question_showing (current_question);
    });

    $('#submit_btn').click(function () {
        $('#quiz_main_form').submit();
    });

    $('#quiz_main_form').on('submit', function (e) {
        e.preventDefault();
        clearTimeout(timeout);
        var data = $('#quiz_main_form').serializeObject();
        var url = $('#quiz_main_form').attr('action');

        $.ajax({
            type:'POST',
            url:url,
            data: data,
            dataType: 'json',
            cache: false,
            success: function(response){
                if(response.success) {
                    $('.quiz_submitted_overlay').show();
                    $('#obtained_marks').html(response.total_obtained);
                    $('#performance_msg').html(response.performance);
                }
            },
            error: function(response) {
                alert("Something Bad Happened! Try again!!!");
            }
        });
    });

    $('#authenticate_submit_btn').click(function (e) {
        e.preventDefault();
        var data = $('#authenticate_student').serializeObject();
        var url = $('#authenticate_student').attr('action');
        var flash_class = "error";

        $.ajax({
            type:'POST',
            url:url,
            data: data,
            dataType: 'json',
            cache: false,
            success: function(response){
                if(response.success) {
                    $('#student_id').val(response.student_id);
                    $('.quiz_start_overlay').hide();
                    //start_counting();
                    flash_class ="success";
                }
                alert(response.msg);
                $('.flash_message').show();
                $('#flashMessage').html(response.msg);
                $('#flashMessage').removeClass("success error").addClass(flash_class);
            },
            error: function(response) {
                alert("Something Bad Happened! Try again!!!");
                $('.flash_message').show();
                $('#flashMessage').html("Something Bad Happened! Try again!!!");
                $('#flashMessage').removeClass("success error").addClass(flash_class);
            }
        });
    })
});

$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

function disable_prev_btn(current_question) {
    if(current_question == 0) {
        $('.prev_btn').addClass('disabled');
    } else {
        if($('.prev_btn').hasClass('disabled')) {
            $('.prev_btn').removeClass('disabled');
        }
    }
}

function update_current_question_showing (current_question) {
    $('#current_question_showing').html( parseInt(current_question) + 1 );
}

function start_counting() {
    var rem_min = $('#remaining_time_min').html();
    var rem_sec = $('#remaining_time_sec').html();

    var total_rem_seconds = (parseInt(rem_min) * 60) + parseInt(rem_sec);
    console.log(total_rem_seconds);

    total_rem_seconds -= 1;
    rem_sec = total_rem_seconds % 60;
    rem_min = (total_rem_seconds - rem_sec) / 60;

    if(rem_min<10) rem_min = "0" + rem_min;
    if(rem_sec<10) rem_sec = "0" + rem_sec;
    
    if(total_rem_seconds <= 0) {
        var student_id = $('input[name=student_id]').val();
        if(student_id!="") {
            $('#quiz_main_form').submit();
        } else {
            window.location.reload();
        }
    }
    
    $('#remaining_time_min').html(rem_min);
    $('#remaining_time_sec').html(rem_sec);

    timeout = setTimeout(start_counting, 1000);
}

$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
        };
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#singupForm, #loginForm, #add_student_form, #add_ques_form, #create_quiz_form, #authenticate_student').bootstrapValidator({
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