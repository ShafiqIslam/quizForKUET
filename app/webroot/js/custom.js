



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


/*-----------------JS Slider------------------*/

$('#slideshow').dsSlider({
  duration: 10000, // in ms
  direction: "right" // or 'left'
});


/*---------Exam script set section----*/

$(function(){
    var items = $('.quiz_exam ul');
    if(items.filter(':visible').length == 0){
        items.first().show();
        console.log(4);
        $('#prev').addClass('disabled');
    } else{
       $('#prev').removeClass('disabled'); 
    }

    $('#next').click(function(e){
        e.preventDefault();

        var active = items.filter(':visible:last');
        active.hide();

        var next = active.next();
        if (next.length) {
             next.show();
        }
        if (next.length ==items.last()) {
            $('#next').addClass('disabled');
        }
    });
});
