$(document).ready(function(){


	/*//////////////////////////search form//////////////////////////*/
	$('.link-get-form').bind('click', function(e){
		e.preventDefault();
		var $this = $(this),
		    wrap_block = $this.closest('.form-search-block'),
			form_block = wrap_block.find('.search-form');
			
			wrap_block.toggleClass('active-el');
			
			if(wrap_block.hasClass('active-el')){
				form_block.fadeIn(300);
			}else{
				form_block.fadeOut(300);
				form_block.find("input[type='text']").val('');
			}
	});




		/*--------------main slider--------------*/
		    $('.home-slider').bxSlider({
			  infiniteLoop: true,
			  auto:true,
			  speed:1500,
			  controls: true,
			  pager: true
			});
	

		/*-------------------gallery-------------------*/
		  $(".gallery").owlCarousel({
 
		      navigation : true, // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem:true
		 
		      // "singleItem:true" is a shortcut for:
		      // items : 1, 
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false
		 
		  });

		   $(".revicews-list").owlCarousel({
 
		      navigation : true, // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem:true,
		      navigationText: ["< предыдущий","следующий >"]
		 
		      // "singleItem:true" is a shortcut for:
		      // items : 1, 
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false
		 
		  });



		   /*----------------------order product popup----------------*/
			  $('.order-service, .order-header').magnificPopup({
			        type: 'inline',
			        preloader: false,
			        

			        fixedContentPos: false,
			        fixedBgPos: true,

			        overflowY: 'auto',

			        closeBtnInside: true,
			        preloader: false,
			        
			        midClick: true,
			        removalDelay: 300,
			        mainClass: 'my-mfp-zoom-in'
			    });


});