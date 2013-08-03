$(function() {
	startSlideShow();
	// Nav highlighting
	var hFunc = function(from, to) {
		$('#wrapper').on('mouseover', from, function() {
			var href = this.href;
			$(to).each(function() {
				if (this.href.indexOf(href) === 0) {
					$(this).parent().addClass('hover');
				} else {
					$(this).parent().removeClass('hover');
				}
			});
		}).on('mouseout', from, function() {
			$(to).each(function() {
				$(this).parent().removeClass('hover');
			});
		});
	};

	hFunc('.pthumbnails a', '.children a');
	hFunc('.children a', '.pthumbnails a');

	$(".invalid").prettyPhoto({social_tools: '', theme:'dark_square'});

	if ($('.thumbnails').length > 0) {
		$('.thumbnails').css('display','none').wrap('<div id="gallery" />');
		$('.content').append('<p style="margin-top:20px;"><a id="photoLink" class="photoLink" href="#"><span></span>Photo Gallery</a></p>');
	}
	$('#photoLink').click(function(e) {
		e.preventDefault();
		var imgs = [];
		var titles = [];
		var descs = [];
		$('#gallery img').each(function() { 
			imgs.push(this.src);
			titles.push('');
			descs.push('');
		 });
		$.prettyPhoto.open(imgs, titles, descs);
	});

	$('#left-submenu .children .current_page_item a').append('<span class="currentArrow">');
	var hide = (!$('#left-submenu .children').parent().hasClass('current_page_item') && $('#left-submenu .children').parent().find('.current_page_item').length < 1);
	if (hide) {
		$('#left-submenu .children').hide();
	} else {
		if (!$('#left-submenu .children').parent().hasClass('current_page_item')) {
			var link = $('#left-submenu li a')[0].href.split('/');
			var remove = (link[link.length-1].length > 0)?1:2;
			link.splice(link.length-remove);
			$('#left-submenu li a')[0].href = link.join('/');
			$('#left-submenu li a')[0].innerHTML = 'Overview';
		}
	}
	$('.activeChild').prepend('<span class="currentArrow">');


	// Slideshow 

	$('#controlBar').append('<a href="#" id="projectTitle"></a>');
	
	function startSlideShow() {
		//add pager and controls to slideshow
		if ($('#slideshow').length === 0) return;
		if ($('#slides a').length > 0) {
			$('#projectTitle').html($('#slides a').get(0).title);
		}
		$('#controlBar').append('<div id="nav"></div>');

		$('#slideshow').append('<div id="ss_back">back</div>');
		
		$('#slideshow').append('<div id="ss_next">next</div>');

		$('#slides').cycle({
			pager : '#nav',
			next : '#ss_next',
			prev : '#ss_back',
			before : function (prev, slide) {
				if (slide.title) {
					$('#projectTitle').html(slide.title);
					$('#projectTitle').attr('href', slide.href);
				} else {
					$('#projectTitle').html('');
					$('#projectTitle').attr('href', '#');
				}
			}
		});
	}

	var counter = 0;
	$('#navControl a').each(function() {
		if (this.id == 'clink') return;
		$(this).addClass('n_'+counter);
		counter++;
	});

	$('.n_0').addClass('selected');

	var sizes = { 1:330, 6:500 };
	var defaultSize = 280;
	$('#intro').css('height', defaultSize);
	function animateTextDiv(size, callback) {
		var newSize = (sizes[size])?sizes[size]:defaultSize;
		newSize = newSize + 'px';
		if ($('#intro').css('height') == newSize) {
			if (callback) callback();
			return;
		}
		$('#intro, #nav').animate({height:newSize}, 500, 'linear', function() {
			if (callback) callback();
		});
	}

	$('#navControl a').click(function(e) {
		if (this.id == 'clink') return;
		e.preventDefault();
		var go = parseInt(this.className.split('_')[1]);
		var current = $($('#content .carousel-inner').children()[go]);
		var last = $('#content .carousel-inner .active');
		last.removeClass('active');
		last.fadeOut(function() {
			animateTextDiv(go, function() {
				current.fadeIn();
				current.addClass('active');
				var update_nav = '.n_'+go;
				$('#navControl li .selected').removeClass('selected');
				$(update_nav).addClass('selected');
			});
		});
	});

	$('.submit').click(function(e) {
		e.preventDefault();
		var form = $(this).parents(':eq(1)').find('form');
		if (!Modernizr.input.required) {
			form.find('label').css('color', 'inherit');
			var error = false;
			form.find('input[required]').each(function() {
				if ($(this).val().length < 2) {
					error = true;
					form.find('label[for='+this.id+']').css('color', 'red');
				}
			});
			if (error) {
				return alert('Please complete all of the required fields');
			}
		}
		form.find('.doSubmit').click();
	});
	
	$('.contactForm').submit(function(e) {
		e.preventDefault();
		$('#jsval').val('valid');
		var data = $(this).serialize();
		var self = this;
		$.ajax({type: 'POST',
						url: '/wp-content/themes/nmi/form/submit.php',
						data: data, 
						success: function(rs) {
							$(self).html('<p>Your message was submitted successfully.');
							var submit = $(self).parents(':eq(1)').find('button.submit');
							submit.remove();
						},
						error:function() {
							alert("An error occured while submitting the form, please try again later");
						}
					});
	});
});

