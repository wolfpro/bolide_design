 $(function() {
        $("#action a").on('click', function(e) {
            $('html,body').stop().animate({
                scrollTop: $('#we').offset().top - 69
            }, 400);
            e.preventDefault();
        });
    });