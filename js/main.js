 /*********** Add custom JS here  *****************/


$(document).ready(function(){
    $(".author-info-test").affix({
        offset: { 
            top: 0 
     	}
    });
});

$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
		
$("#hero .panel").delay(500).animate({"opacity": "1"}, 1000);

$('#content').scrollspy({ target: '#subnav' })

       $(document).ready(function() {
        
            /* affix the navbar after scroll below header */
		$('#nav').affix({
		      offset: {
		        top: $('#title').height()-$('#nav').height()
		      }
		});	
		
		/* highlight the top nav as scrolling occurs */
		$('body').scrollspy({ target: '#nav' })
		
		/* smooth scrolling for scroll to top */
		$('.scroll-top').click(function(){
		  $('body,html').animate({scrollTop:0},1000);
		})
		
		/* smooth scrolling for nav sections */
		$('#nav .navbar-nav li>a').click(function(){
		  var link = $(this).attr('href');
		  var posi = $(link).offset().top+20;
		  $('body,html').animate({scrollTop:posi},700);
		})