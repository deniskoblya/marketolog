jQuery(document).ready(function () {
    // FORMS
    jQuery('.send').click( function() {
    	var form = jQuery(this).closest('form');
    	
    	if ( form.valid() ) {
    		form.css('opacity','.5');
    		var actUrl = form.attr('action');

    		jQuery.ajax({
    			url: actUrl,
    			type: 'post',
    			dataType: 'html',
    			data: form.serialize(),
    			success: function(data) {
    				form.html(data);
    				form.css('opacity','1');
    			},
    			error:	 function() {}
    		});
    	}
    });


    jQuery('.sec8 .list').click(function () {
        jQuery('.sec8 .list').removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery('.sec8 .ls1').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>Увы, из-за повального нашествия "гуру инфобизнеса" многие понятия и термины в реальном мире часто путают с вымыслом.</p><p>Управление Маркетингом - это построение бизнес-процессов, Promotion (продвижение) - часть маркетинга, а реклама - часть продвижения.</p><p>Мы вместе с собственниками/инвесторами выстраиваем бизнес-процессы - конечно же, включая вопросы позиционирования, продвижения - и рекламы.</p><p>Если по-порядку - то это: маркетинг-аудит, согласование концепции развития, утверждение стратегии, бюджетирование и активные действия. <br>Однако, все может отличаться - в зависимости от особенностей и задач Вашего бизнеса.</p>');
    });
    jQuery('.sec8 .ls2').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls3').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls4').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls5').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls6').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>6 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls7').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>7 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls8').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>8 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });
    jQuery('.sec8 .ls9').click(function () {
        jQuery('.sec8 .right_b .cont_block').html('<p>9 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quisquam explicabo necessitatibus cum hic at omnis, culpa, accusamus molestias dolorem deserunt voluptate quas nesciunt itaque facilis tempora maiores ipsum quasi!</p>');
    });



    jQuery(".totop").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".wrapper").offset().top
        }, 1000);
    });

    jQuery(".del").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".s7").offset().top
        }, 400);
    });



});
