// JavaScript Document

$(document).ready(function () {

	var owl = $("#owl-demo2");
	owl.owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
		navigation: true,
		dots:true,
		autoplay: false,
		nav: false,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		lazyLoad: true,
		loop: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}

	});

});

$(document).ready(function(){
  $('.like-d1').click(function(){
    $('.like-show').toggleClass("save-d1");
 });
});
$(document).ready(function(){
  $('.like-d2').click(function(){
    $('.like-show2').toggleClass("save-d1");
 });
});
$(document).ready(function(){
  $('.like-d3').click(function(){
    $('.like-show3').toggleClass("save-d1");
 });
});
$(document).ready(function(){
  $('.like-d4').click(function(){
    $('.like-show4').toggleClass("save-d1");
 });
});

$(document).ready(function() {
  $( window ).scroll(function() {
		var height = $(window).scrollTop();
		if(height >= 100) {
			$('.fixed-top').addClass('fixed-menu');
		} else {
			$('.fixed-top').removeClass('fixed-menu');
		}
	});
});



//$(document).ready(function() {
//		$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
//		$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
//		$('#list').click(function(event){event.preventDefault();$('#products .item').removeClass('grid-group-item');});
//	});

$(document).ready(function(){
  $('#save-ft').click(function(){
    $('.save-bn-show').toggleClass("save-d1");
 });
});

$(document).ready(function(){
  $('.grid-bn-sec ul li a').click(function(){
    $('.grid-bn-sec li a').removeClass("active");
    $(this).addClass("active");
 });
});


$(document).ready(function() {
 

  $('#grid').click(function(event){
    event.preventDefault();
    $('#posts .item').removeClass('col-md-12 new-add');
    $('#posts .item').addClass('col-lg-6');
	$(".post-ima-box").show();
    $('#posts img').removeClass('d-none');
	$('#posts .paragraph-d1').addClass('d-none');
    $('#list').removeClass('active');
    $('#grid').addClass('active');
  });
  
   $('#list').click(function(event){
    event.preventDefault();
    $('#posts .item').addClass('col-md-12 new-add');
    $('#posts img').addClass('d-none');
	$('#posts .item').removeClass('col-lg-6');
	$(".post-ima-box").hide();
	$('#posts .paragraph-d1').removeClass('d-none');
    $('#grid').removeClass('active');
    $('#list').addClass('active');
  });
  
});


$(document).ready(function() {
  $('#read-move-d1').click(function() {
		  $('#show-more-text').slideToggle();
		  if ($('#read-move-d1').text() == "(read less)") {
			$(this).text("(read more)")
		  } else {
			$(this).text("(read less)")
		  }
		});
});

$(document).ready(function() {
  $('#read-move-d2').click(function() {
		  $('#show-more-text2').slideToggle();
		  if ($('#read-move-d2').text() == "(read less)") {
			$(this).text("(read more)")
		  } else {
			$(this).text("(read less)")
		  }
		});
});


$(document).ready(function() {
  $('#read-move-d3').click(function() {
		  $('#show-more-text3').slideToggle();
		  if ($('#read-move-d3').text() == "(read less)") {
			$(this).text("(read more)")
		  } else {
			$(this).text("(read less)")
		  }
		});
});


$(document).ready(function() {
  $('#read-move-d4').click(function() {
		  $('#show-more-text4').slideToggle();
		  if ($('#read-move-d4').text() == "(read less)") {
			$(this).text("(read more)")
		  } else {
			$(this).text("(read less)")
		  }
		});
});

$(document).ready(function() {
  $('#learn-d1-bn').click(function() {
		  $('#hide-defalt').slideToggle();
		  if ($('#learn-d1-bn').text() == "Learn Less") {
			$(this).text("Learn more")
		  } else {
			$(this).text("Learn Less")
		  }
		});
});


$("#radio2").click(function(){
  $("#radio-show-div").show();
});
$("#radio1").click(function(){
  $("#radio-show-div").hide();
});


jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('.wizard-required').each(function(){
			var thisValue = jQuery(this).val();

			if( thisValue == "") {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
	jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		parentFieldset.find('.wizard-required').each(function() {
			var thisValue = jQuery(this).val();
			if( thisValue == "" ) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
	});
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});
});



