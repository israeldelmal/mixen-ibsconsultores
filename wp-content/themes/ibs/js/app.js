$(window).scroll(function () {

    if(($(window).width() <= '767') && ($(window).scrollTop() >= '1') && (!$('.navbar').hasClass('navbar-fixed-top')))

    {

        $('.navbar').addClass('navbar-fixed-top');

    }

    else if(($(window).width() <= '767') && ($(window).scrollTop() < '1') && ($('.navbar').hasClass('navbar-fixed-top')))

    {

        $('.navbar').removeClass('navbar-fixed-top');

    }

    else if(($(window).width() > '767') && ($(window).scrollTop() >= '40') && (!$('.navbar').hasClass('navbar-fixed-top')))

    {

        $('.navbar').addClass('navbar-fixed-top');

    }

    else if(($(window).width() > '767') && ($(window).scrollTop() < '40') && ($('.navbar').hasClass('navbar-fixed-top')))

    {

        $('.navbar').removeClass('navbar-fixed-top');

    }

});



$('.navbar-nav li').click(function() {

    $('.navbar-nav li').removeClass('active');

    $(this).addClass('active');

});



$('li.dropdown a').on('click', function (event) {

    $('li.dropdown.dropdown-submenu').removeClass('open');

    $(this).parent().toggleClass('open');

});



$('body').on('click', function (e) {

    if (!$('li.dropdown').is(e.target) 

        && $('li.dropdown').has(e.target).length === 0 

        && $('.open').has(e.target).length === 0)

    {

        $('li.dropdown').removeClass('open');

    }

});



$("#mapa").click(function() {

    $(this).find("iframe").css("pointer-events","all");

});



/* PAGE LOAD WITH HASH OFFSET */

(function($, window) {

    $navbar_height = 110;

    var adjustAnchor= function() {

        var $anchor = $(':target'),

            fixedElementHeight = $navbar_height;

        if ($anchor.length > 0) {

            $('html, body')

                .stop()

                .animate({

                scrollTop: $anchor.offset().top - fixedElementHeight

            }, 800);

        }

    };

    $(window).on('hashchange load', function() {

        adjustAnchor();

    });

})(jQuery, window)





//Ajax contact form

$(function() {

    var close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';

    // Get the form.

    var form = $('.form-content');

    // Get the messages div.

    var formMessages = $('#form-output');



    // Set up an event listener for the contact form.

    $(form).submit(function(e) {

        // Stop the browser from submitting the form.

        e.preventDefault();

        $("#form-submit").val("Enviando...");



        // Serialize the form data.

        var formData = $(form).serialize();



        // Submit the form using AJAX.

        $.ajax({

            type: 'POST',

            url: $(form).attr('action'),

            data: formData

        })

            .done(function(response) {

                // Make sure that the formMessages div has the 'success' class.

                $(formMessages).removeClass('alert alert-danger');

                $(formMessages).addClass('alert alert-success');



                // Set the message text.

                $(formMessages).html(close+response);



                // Clear the form.

                $('#name').val('');

                $('#email').val('');

                $('#phone').val('');

                $('#mssg').val('');

                $("#form-submit").val("Enviar");

            })

            .fail(function(data) {

                // Make sure that the formMessages div has the 'error' class.

                $(formMessages).removeClass('alert alert-success');

                $(formMessages).addClass('alert alert-danger');



                // Set the message text.

                if (data.responseText !== '') {

                    $(formMessages).html(close+data.responseText);

                    $("#form-submit").val("Enviar");

                } else {

                    $(formMessages).html(close+'Oops! Ocurrió un error, intentelo nuevamente.');

                    $("#form-submit").val("Enviar");

                }

            });

    });

});

// Navegación
$('.item-menu').on('click', function(event) {
    event.preventDefault();
    let Item = $(this).attr('href');
    
    $('body, html').stop(true, true).animate({
        scrollTop: $(Item).offset().top
    }, 1000);
});