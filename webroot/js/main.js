$(document).ready(function() {

	/*
	*	MENU
	*/


	if($('.page_index').length != 0) {
		$('.menu li.home').addClass('active');
	} else if($('.proposition').length != 0) {
		$('.menu li.dashboard').addClass('active');
	} else if($('.all_favoris').length != 0) {
		$('.menu li.favs').addClass('active');
	} else if($('.all_messages').length != 0) {
		$('.menu li.messages').addClass('active');
	} else if($('.page_offers').length != 0) {
		$('.menu li.propositions').addClass('active');
	} else if($('.menu_profil').length != 0) {
		$('.menu li.profil').addClass('active');
	}

	/*
	*	HOME
	*/

	function getModeuses() {
		makeAjax('POST', "users/getModeuses", data_search, function() {
			console.log('get_modeuses', _this.response.modeuses);

			$('.list_modeuses').empty();

			for(modeuse in _this.response.modeuses) {

				var new_li = 
					'<li class="modeuse">'+
						'<a href="/Noddi/Modeuses/view/'+_this.response.modeuses[modeuse].id+'">'+
							'<img class="modeusePic" src="'+_this.response.modeuses[modeuse].user.picture+'" />'+
						'</a>' +
						'<div class="infoModeuse">' +
						'<p class="modeuseName">NONO J.</p>' +
						'<ul class="modeuseStats">' +
							'<li class="stat facebook">222</li>' +
							'<li class="stat twitter">124</li>' +
							'<li class="stat instagram">541</li>' +
						'</ul>' +
						'<div class="add_favori" data-modeuse="'+_this.response.modeuses[modeuse].id+'"></div>'+
						'</div>' +
					'</li>'
				;

				$('.list_modeuses').append(new_li);

				$('.section_home').hide();
				$('.section_les_noddiz').show();
			}
		});
	}

	if($('.list_modeuses').length != 0) {
		data_search = {};
		getModeuses(data_search);		
	}

	// $('.section_home').hide();
	// $('.section_les_noddiz').show();

	// $('.show_socials').on('click', function() {
	// 	$('.section_home').hide();
	// 	$('.section_socials').show();
	// 	$('.show_socials').addClass('section_selected');
	// 	$('.h2_home').text("Filtres");
	// });

	// $('.show_audience').on('click', function() {
	// 	$('.section_home').hide();
	// 	$('.section_audience').show();
	// 	$('.show_audience').addClass('section_selected');
	// 	$('.h2_home').text("Filtres");
	// });

	// $('.socials_blog button').on('click', function() {
	// 	$('.socials_blog button').removeClass('blog_selected');
	// 	$(this).addClass('blog_selected');
	// });

	// $('.socials_network .button').on('click', function() {

	// 	if($(this).hasClass('network_selected')) {
	// 		$(this).removeClass('network_selected');

	// 	} else {

	// 		if($(this).attr('data-network') === 'all') {
	// 			$('.socials_network .button').removeClass('network_selected');
	// 			$(this).addClass('network_selected');
	// 		} else {
	// 			$('.socials_network .button[data-network=all]').removeClass('network_selected');
	// 			$(this).addClass('network_selected');
	// 		}
	// 	}
	// });

	// $('.socials_audience .button').on('click', function() {

	// 	if($(this).hasClass('audience_selected')) {
	// 		$(this).removeClass('audience_selected');

	// 	} else {

	// 		if($(this).attr('data-network') === 'all') {
	// 			$('.socials_audience .button').removeClass('audience_selected');
	// 			$(this).addClass('audience_selected');
	// 		} else {
	// 			$('.socials_audience .button[data-network=all]').removeClass('audience_selected');
	// 			$(this).addClass('audience_selected');
	// 		}
	// 	}
	// });

	// $('.filter_home').on('click', function() {

	// 	data_search = {};
	// 	data_search.blog = $('.socials_blog .blog_selected').attr('data-blog');

	// 	data_search.socials = {};
	// 	data_search.audience = {};

	// 	var i = 0;
	// 	$('.network_selected').each(function() {
	// 		data_search.socials[i] = $(this).attr('data-network');
	// 		i++;
	// 	});

	// 	var j = 0;
	// 	$('.audience_selected').each(function() {
	// 		data_search.audience[j] = $(this).attr('data-audience');
	// 		j++;
	// 	});

	// 	console.log(data_search);

	// 	getModeuses(data_search);
	// });

	/*
	*	PAGE MODEUSE
	*/

	$('.page_modeuse').hide();
	$('.modeuse_infos').show();

	$('.show_modeuse_infos').on('click', function() {
		$('.page_modeuse').hide();
		$('.modeuse_infos').show();
	});

	$('.show_modeuse_socials').on('click', function() {
		$('.page_modeuse').hide();
		$('.modeuse_socials').show();
	});

	$('.send_offer').on('click', function() {
		swal({
			title: "Confirmation",
			text: "Votre demande a bien été envoyée."
		});
	});



	/*
	*	PROFIL
	*/

	$('.profile_section').hide();

	$('.menu_profil li a').on('click', function(e) {

		if(!$(this).hasClass('disconnect')) {
			e.preventDefault();
			$('.profile_section').hide();
			$('.'+$(this).attr('data-section')).show();
		}
		
	});

	$('.update_profil form').on('submit', function(e) {
		e.preventDefault();

		var type = $(this).find('input[name=type]').val();

		var data = {};

		if(type === 'modeuse') {
			data.modeuse_id = $(this).find('input[name=modeuse_id]').val();
			data.firstname = $(this).find('input[name=firstname]').val();
		} else if(type === 'brand') {
			data.brand_id = $(this).find('input[name=brand_id]').val();
			data.activity_id = $(this).find('select[class=activities]').val();
			data.name = $(this).find('input[name=name]').val();
		}

		makeAjax('POST', "profil/update", data, function() {
			console.log('user_added', _this.response);
		});
	});


	/*
	*	FAVORIS
	*/

	$(document).on('click', '.add_favori', function() {

		var data_user = {};
		data_user.brand_id = $('.get_brand_id').val();
		data_user.modeuse_id = $(this).attr('data-modeuse');

		makeAjax('POST', "favoris/add", data_user, function() {
			swal({
				title: "Added !",
				type: "success"
			});
		});
	});

	$('.delete_favori').on('click', function() {
		var favori_id = $(this).attr('data-favori');
		var that = $(this);
		
		makeAjax('POST', "favoris/delete/"+favori_id, favori_id, function() {
			that.parents('li').remove();
		});
	});


	/*
	*	MESSAGES
	*/

	$('.answer_message').hide();

	$('.answerMessage').on('click', function() {

		var parent = $(this).parent();
		
		if($('input[name=viewed]').length != 0) {

			var data_message = {};

			data_message.message_id = $('input[name=viewed]').val();

			makeAjax('POST', "messages/updateView/", data_message, function() {

				$('.all_messages').hide();

				$('.answer_message .answer_name').text(parent.find('.message_sender').text());
				$('.answer_message .answer_content').text(parent.find('.message_content').text());
				$('.answer_message .answer_time').text(parent.find('.message_time').text());

				$('.answer_message').show();
			});
		} else {
			$('.all_messages').hide();

			$('.answer_message .answer_name').text(parent.find('.message_sender').text());
			$('.answer_message .answer_time').text(parent.find('.message_time').text());

			$('.answer_message').show();
		}
	});

	$('.sendMessage').on('click', function() {

		data = {};
		data.brand_id = $('input[name=brand_id]').val();
		data.modeuse_id = $('input[name=modeuse_id]').val();
		data.content = $('textarea').val();
		data.from_who = 'brand';
		data.viewed = 0;

		makeAjax('POST', "messages/add", data, function() {

			var data_message = {};
			data_message.message_id = $('input[name=viewed]').val();
			
			makeAjax('POST', "messages/updateAnswer/", data_message, function() {
				swal({
					type: "success",
					title: 'success'
				});
			});
		});
	});

	/*
	*	MODEUSES OFFERS
	*/

	$('.all_offers').hide();

	$('.get_offers').on('click', function() {

		makeAjax('POST', "offers/getOffers", '', function() {

			console.log(_this.response.offers);

			for (offer in _this.response.offers) {
				var li =
					'<li>'+
						'<p>'+_this.response.offers[offer].title+'</p>'+
						'<a class="see_offer button" href="/Noddi/offers/view/'+_this.response.offers[offer].id+'">Postuler</a>'+
					'</li>'
				;
				$('.all_offers').append(li);
			}			

			$('.all_offers').show();
		});

	});

	/*
	*	APPLY OFFER
	*/

	$('.apply_offer').on('click', function() {

		var data_apply = {};
		data_apply.modeuse_id = $(this).attr('data-modeuse');
		data_apply.offer_id = $(this).attr('data-offer');
		data_apply.message = 'test';
		data_apply.viewed = 0;

		swal({
			title : 'yeah',
			confirmButtonText : "OK",
			closeOnConfirm: false

		}, function() {

			makeAjax('POST', "../applyOffer", data_apply, function() {

				swal({
					title: 'Success',
					type : 'success'
				}, function() {
					window.location.href = WEB_URL+'/offers/';
				});



			});
			
		});
	});

});	
