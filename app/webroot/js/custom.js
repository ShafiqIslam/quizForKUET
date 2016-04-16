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
})