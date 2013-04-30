(function($) {
	
	
	$(window).scroll(function() {    
			    var scroll = $(window).scrollTop();
			    
			
			    if (scroll >= 90) {
			        	
			        	$(".navbar-inner").addClass("collapse");
			        	$("#header-outer").addClass("short");
			        
			        
			    		$("#branding").hover(function(){
					   		$('.navbar-inner').removeClass("collapse");
					    },function(){
					    	$('.navbar-inner').addClass("collapse");
						});

			    	
			        			        
			    } else {
			        $(".navbar-inner").removeClass("collapse");
			    }
			    if ($(window).scrollTop() == 0) {
			     	//alert('Scrolled to Page Top');
			     	$("#branding").hover(function(){
					   		$('.navbar-inner').removeClass("collapse");
					});
					$("#header-outer").removeClass("short");

			    }
                    
			    
			    
	});
		

	
})( jQuery );