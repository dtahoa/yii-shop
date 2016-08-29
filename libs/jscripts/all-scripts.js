
/*Effect for cart icon - scroll */
(function($){

	$.fn.advScroll = function(option) {
		$.fn.advScroll.option = {
			marginTop:100,
			marginLeft:20,
			easing:'',
			timer:100
		};

		option = $.extend({}, $.fn.advScroll.option, option);

		return this.each(function(){
			var el = $(this);
			$(window).scroll(function(){
				t = parseInt($(window).scrollTop()) + option.marginTop;
				el.stop().animate({marginTop:t},option.timer,option.easing);
			})
		});
	};

})(jQuery)

/*Effect for show picture - fancybox */
$(document).ready(function() {
        $("a[rel=example_group]").fancybox({
            'transitionIn'		: 'none',
            'transitionOut'		: 'none',
            'titlePosition' 	: 'over',
            'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            }
        });
    $('#goto').change(function() {
        var url = $(this).val(); // get selected value
        if (url != '') { // require a URL
            window.location = url; // redirect
        }
        return false;
    });
    $('.buy-now').click(function(){
        var url = '/shop/shoppingCart/create';
        var id = $(this).attr('rel');
        $.post(url, { product_id: id, amount: 1 }, function(response) {
            window.location = '/shop/shoppingCart/view'; // redirect
        });
    });
    $('.amount').keyup(function() {
        var position = $(this).attr('rel');
        var amount = $(this).val();
        $.ajax({
            url:'/shop/shoppingCart/updateAmount',
            data: {amount: amount, position: position},
            success: function(result) {
                console.log($('.price_'+position).attr('rel'))
                $(this).css('background-color', 'lightgreen');
                $('.total_price_'+position).html('$'+ (amount*$('.price_'+position).attr('rel')).toFixed(2));
                $('.price_total').load('/shop/shoppingCart/getPriceTotal');
            },
            error: function() {
                $('#amount').css('background-color', 'red');
            }
        });
    });

});
