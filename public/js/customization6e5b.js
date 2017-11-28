$(document).ready(function() {

    var slideAnimation = false;
    $('.customize-wrapper .icon-wrapper').on('click', function () {
        if (slideAnimation) {
            return;
        }

        slideAnimation = true;

        $('.customize-wrapper').animate({
            left: (parseInt($('.customize-wrapper').css('left')) == 0) ? '-280px' : '0px'
        }, 300, function () {
            slideAnimation = false;
        });
    });

    $('.jscolor').on('change', function () {
        var element = $(this).data('element');
        var param = $(this).data('param');

        $(element).css(param, '#' + $(this).val());
    });

    $('.colors .color').on('click', function () {
        var element = $(this);

        $('#page-stylesheet').attr('href', element.data('file'));
    });

    $('.class-switch').on('change', function () {
        var t = $(this);
        if (t.is(':checked')) {
            var element = $(t.data('element'));
            if (element.length > 0) {
                var addClass = t.data('add-class');
                var removeClass = t.data('remove-class');

                if (addClass) {
                    element.addClass(addClass);
                }
                if (removeClass) {
                    element.removeClass(removeClass);
                }
            }
        }
    });
    $('.element-switch').on('change', function () {
        var t = $(this);
        if (t.is(':checked')) {
            var show = t.data('show');
            var hide = t.data('hide');

            $(show).show();
            $(hide).hide();
        }
    });
});