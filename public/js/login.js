$(function() {
    
        /* Show / Hide Password Recover Form */
        $('#password').on('click', function(e) {
            e.preventDefault();
            $('.form-signin').slideUp(300, function() {
                $('.form-password').slideDown(300);
            });
        });
        $('#login').on('click', function(e) {
            e.preventDefault();
            $('.form-password').slideUp(300, function() {
                $('.form-signin').slideDown(300);
            });
        });
        $('#submit-form, #submit-password').click(function(e) {
            e.preventDefault();
            var l = Ladda.create(this);
            l.start();
            setTimeout(function() {
                window.location.href = "dashboard.html";
            }, 2000);
        });
        $.backstretch(["images/gallery/futbol-1.jpg"],
        {
            fade: 600,
            duration: 4000
        });

    
});
