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
/*
$('.slider').jSlides({
    img1: {h2:'Slide 1', h3:'I am slide 1'},
    img2: {h2:'Slide 2', h3:'I am slide 2'},
    img3: {h2:'Slide 3', h3:'I am slide 3'},
    img1: {h2:'Slide 4', h3:'I am slide 4'},
    autoplay: true,
    time: 3000,
    width:500,
    height: 400,

});
*/

$('#slideshow').dsSlider({
  duration: 10000, // in ms
  direction: "right" // or 'left'
});

