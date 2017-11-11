(function ($, undefined) {
    console.log($('.one').width());
    console.log($('.one').height());

    console.log($('.one').parent());
    console.log($('.one').children().css('color','green'));
    $('.two').addClass('newclass');
    $('.two').hide(3000).show(300);

    $('.four').append(($());

    console.log('Hello');
})(jQuery);