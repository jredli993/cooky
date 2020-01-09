(function($){

	"use strict";

	$(document).ready(function () {
		socialchef.init();
	});

	var socialchef = {

		init: function () {

            $('.btn-remove').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var $tr = $(this).closest('tr');
                var route = $(this).data('route');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'DELETE',
                    dataType: 'JSON',
                    url: '/admin/' + route + '/' + id,
                    success: function (msg) {
                        md.showNotification('top', 'center', msg.success, 'info');
                        $('bs-tooltip-bottom').remove();
                        $tr.find('td').fadeOut(1000,function(){
                            $tr.remove();
                        });
                    },
                    error: function () {
                        console.log('failed')
                    }
                });
            });


			//CUSTOM FORM ELEMENTS
			$('select, input[type=radio],input[type=checkbox],input[type=file]').uniform();

			//MOBILE MENU
			$('.main-nav').slicknav({
				prependTo:'.head .wrap',
				allowParentLinks : true,
				label:''
			});

			//SCROLL TO TOP BUTTON
			$('.scroll-to-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});

			//MY PROFILE TABS
			$('.tab-content').hide().first().show();
			$('.tabs li:first').addClass("active");

			$('.tabs a').on('click', function (e) {
				e.preventDefault();
				$(this).closest('li').addClass("active").siblings().removeClass("active");
				$($(this).attr('href')).show().siblings('.tab-content').hide();
			});

			var hash = $.trim( window.location.hash );
			if (hash) $('.tab-nav a[href$="'+hash+'"]').trigger('click');

			//ALERTS
			$('.close').on('click', function (e) {
				e.preventDefault();
				$(this).closest('.alert').hide(400);
			});

			//CONTACT FORM
			$('#contactform').submit(function(){

				var action = $(this).attr('action');

				$("#message").show(400,function() {
				$('#message').hide();

				$('#submit')
					.after('<img src="images/contact-ajax-loader.gif" class="loader" />')
					.attr('disabled','disabled');

				$.post(action, {
					name: $('#name').val(),
					email: $('#email').val(),
					phone: $('#phone').val(),
					comments: $('#comments').val()
				},
					function(data){
						document.getElementById('message').innerHTML = data;
						$('#message').slideDown('slow');
						$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
						$('#submit').removeAttr('disabled');
						//if(data.match('success') != null) $('#contactform').slideUp(3000);

					}
				);
				});
				return false;
			});

			//PRELOADER
			$('.preloader').fadeOut();
		},
	}

})(jQuery);
