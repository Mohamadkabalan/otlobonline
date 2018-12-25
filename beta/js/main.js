(function ($){
    "use strict";
    
    /*---------------------
        jQuery MeanMenu
    -----------------------*/
    jQuery('nav#dropdown').meanmenu();
    /*----------------
        Sticky Js 
    ------------------ */	
    $("#sticker").sticky({topSpacing:0});
    
    /*------------------
        wow js active
    --------------------*/
    new WOW().init();
    
    /*------------------------
        data-toggle-tooltip
    -------------------------*/
    $('[data-toggle="tooltip"]').tooltip();
    
    /*-----------------------------
        featured-product-carousel
    -------------------------------*/
    $(".featured-carousel").owlCarousel({
        autoPlay: false, 
        slideSpeed:1500,
        items : 4,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet : [767,1],
        itemsMobile : [479,1]
    });
    
    /*--------------------------
        newarrival-carousel
    ----------------------------*/
    $(".newarrival-carousel").owlCarousel({
        autoPlay: false, 
        slideSpeed:1500,
        items : 2,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2],
        itemsTablet : [767,1],
        itemsMobile : [479,1]
    });
    
    /*--------------------------
    testimonial-carousel
----------------------------*/
    $(".testimonial-carousel").owlCarousel({
        autoPlay: false, 
        slideSpeed:1500,
        items : 1,
		/*transitionStyle : "backSlide",*/
        pagination:false,
        navigation: true,
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet : [768,1],
        itemsMobile : [479,1]
    });
    /*-----------------------
        blog-carousel
    -------------------------*/
    $(".blog-carousel").owlCarousel({
        autoPlay: false, 
        slideSpeed:1500,
        items : 3,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2],
        itemsTablet : [767,1],
        itemsMobile : [479,1]
    });
    
    /*-----------------------
        blog-carousel
    -------------------------*/
    $(".blog-carousel-2").owlCarousel({
        autoPlay: false, 
        slideSpeed:1500,
        items : 2,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2],
        itemsTablet : [767,1],
        itemsMobile : [479,1]
    });
    
    /*---------------------------
        sing-sidebar-caro-latest
    -----------------------------*/
    $(".sing-sidebar-caro-latest").owlCarousel({
        autoPlay: false, 
        slideSpeed:1500,
        items : 3,
        pagination:false,
        navigation:true,
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2],
        itemsTablet : [767,1],
        itemsMobile : [479,1]
    });
    
    /*----------------------
        brands-carousel
    ------------------------*/
    $(".brands-carousel").owlCarousel({
    autoPlay: false, 
    slideSpeed:200,
    items : 4,
    pagination:false,
    navigation:false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet : [767,2],
    itemsMobile : [479,1]
    });
    
    /*--------------------------
        best-carousel
    ----------------------------*/
    $(".best-carousel").owlCarousel({
        autoPlay: false, 
        slideSpeed:1000,
        items : 1,
        pagination:true,
        navigation: false,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet : [768,1],
        itemsMobile : [479,1]
    });
    
    /*------------------------
        Simple Lence Active
    --------------------------*/  
	$('#p-view .simpleLens-lens-image').simpleLens({
	});
    
    /*----------------------------  
        Single Product Carousel
    ------------------------------ */ 
    $("#single-product").owlCarousel({
        autoPlay: false, 
        slideSpeed: 1500,
        items : 1,
        pagination:true,
        navigation:false,	  
        /* transitionStyle : "fade", */    /* [This code for animation ] */
        navigationText:["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
    });    
    
    /*---------------------------
        Mega-Menu-Categories
    ----------------------------- */
	$('.category-title').on('click',function(){
		if($('.cat-single-wrap').is(':visible')){
			$('.cat-single-wrap').slideUp();
		} else {
			$('.cat-single-wrap').slideDown();
		}
	});
    
	$('.cat-single-wrap .nav > li.view-more').on('click',function(e){
		if($('.cat-single-wrap .nav > li.more-view').is(':visible')){
			$('.cat-single-wrap .nav > li.more-view').stop().slideUp();
			$(this).find('a').text('More category');
		} else { 
			$('.cat-single-wrap .nav > li.more-view').stop().slideDown();
			$(this).find('a').text('Close category');
		}
		e.preventDefault();
	});
    
    /*----------------
	   scrollUp
    ------------------ */	
	$.scrollUp({
       scrollText: '<i class="fa fa-long-arrow-up"></i>',
        scrollSpeed: 900,
        animation: 'fade'
    });
    
    /*---------------------------------
        active login toggle function
    -----------------------------------*/
	 $( '#showlogin' ).on('click', function() {
        $( '#checkout-login' ).slideToggle(700);
     }); 
	
    /*----------------------------------
        active coupon toggle function
    ----------------------------------*/
	 $( '#showcoupon' ).on('click', function() {
        $( '#checkout_coupon' ).slideToggle(700);
     });
	 
    /*----------------------------------
        Create account toggle function
   ------------------------------------*/
	 $( '#cbox' ).on('click', function() {
        $( '#cbox_info' ).slideToggle(900);
     });
	 
    /*---------------------------------
        Create account toggle function
    -----------------------------------*/
    $( '#ship-box' ).on('click', function() {
        $( '#ship-box-info' ).slideToggle(1000);
    });
    
    /*---------------------
	 countdown
	--------------------- */
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });
    
    /*-----------------------------
        price-slider active
    ------------------------------ */  
    $( "#slider-range" ).slider({
       range: true,
       min: 80,
       max: 750,
       values: [ 80, 750 ],
       slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
       }
      });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) ); 
    
    /*----------------
        Parallax
    ----------------*/
    $('.latest-trend-wrap').parallax("70%", 0.12);
    
    /*--------------------------
        Newsletter Popup 
    ---------------------------- */	
    $("#newsletter-popup-conatiner").mouseup(function(e)
    {
        var popContainer = $("#newsletter-popup-conatiner");
        var newsLatterPop = $("#newsletter-popup"); 
        if(e.target.id != newsLatterPop.attr('id') && !newsLatterPop.has(e.target).length)
        {
            popContainer.fadeOut();
        }
    });
	$('.hide-popup').on("click", function(){
        var popContainer = $("#newsletter-popup-conatiner");
		$('#newsletter-popup-conatiner')
        {
            popContainer.fadeOut();
        }
	});
    /*---------------------
        Preloader
    -----------------------*/
    var win = $(window);
    win.on('load', function() {
        $('.preloader').fadeOut('slow');;
    });
    
    /*-----------------
        Isotop-area
    ------------------*/
     $('.isotop-manu li').on('click',function(){ 
        
      $(".isotop-manu li").removeClass("active");
      $(this).addClass("active");        

        var selector = $(this).attr('data-filter'); 
        $(".isotop-items").isotope({ 
            filter: selector, 
            animationOptions: { 
                duration: 750, 
                easing: 'linear', 
            } 
        }); 
      return false;
    });
    
    $(window).load(function() {
    $(".isotop-items").isotope({
			itemSelector: '.single-item',
			layoutMode: 'fitRows',
		});
    });
    
    /*--------------------
        Active
    ----------------------*/
    var skillulli = $('.skill-ulli li');

    skillulli.on("click", function() {
        skillulli.removeClass("active-skill");
        $(this).addClass("active-skill");
    });
    
    
    
})(jQuery);
