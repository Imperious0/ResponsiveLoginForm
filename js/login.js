$(window).on("load", function () {
    $('.login-btn').on('click', function (e) {
        e.preventDefault();
        $(e.target.parentElement).addClass('login-animation');
        $(e.target.parentElement).addClass('login-animation-hide');
        $(e.target.parentElement).next().addClass('login-animation');


        var timeoutHandle;
        function countdown(minutes, seconds) {
            function tick() {
                var counter = $('.verification-timer')[0];
                counter.innerHTML =
                    "Times Left For Renew Code: " + minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                seconds--;
                if (seconds >= 0) {
                    timeoutHandle = setTimeout(tick, 1000);
                } else {
                    if (minutes >= 1) {
                        // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                        setTimeout(function () {
                            countdown(minutes - 1, 59);
                        }, 1000);
                    }
                }
            }
            tick();
        }

        countdown(3, 0);
    });
});
