
		
		$(document).ready(function () { 
		
			$.getJSON('estados_cidades.json', function (data) {

				var items = [];
				var options = '<option value="">Estado</option>';	

				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});

					$("#cidades").html(options_cidades);
					
				}).change();		
			
			});
		
		});

// PONTINHO ANIMADO DO MOUSE //
$(document).ready(function () {
	function playslider(){
		$( ".mouse span.pontinho" ).animate({
			top: "15px",
	  	}, 600, function() {
	  	$( ".mouse span.pontinho" ).animate({
	  		top: "10px"
	  	},600, playslider )
  		});
	}   
	playslider(); //start it up the first time
});


//FECHAR CTA WHATS//
 $(function(){
	$( ".whats .fa-times" ).click(function() {
	  $( ".whats" ).animate({
	    right: "-130px"
	  }, 500 );
	});

});


//ABRIR E FECHAR MODAL DE CONTATO//
	$(function(){
		$('.abrir-modal').click(function(){
			$('.modal').fadeIn(500)
		})
		$('.modal .fa-times').click(function(){
			$('.modal').fadeOut(500)
		})
	})

// ANCORA DO MENU PARA PARTES DO SITE //
   jQuery(document).ready(function($) { 
      $(".scroll").click(function(event){        
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top -150}, 1000);
     });
  });

	$(function() {
    var sticky_navigation_offset_top = $('.menu').offset().top;   
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
          if (scroll_top >= 0) { 
        	$('.menu a').css('font-family','Poppins-Medium')
        }
        if (scroll_top >= 1750) { 
        	$('.menu a').css('font-family','Poppins-Medium')
        	$('.menu a').eq(0).css('font-family','Poppins-Bold')
        	$('.menu a span').removeClass('selecao')
        	$('.menu a:eq(0) span').addClass('selecao')

        }
        if (scroll_top >= 4800) { 
        	$('.menu a').css('font-family','Poppins-Medium')
        	$('.menu a').eq(1).css('font-family','Poppins-Bold')
        	$('.menu a span').removeClass('selecao')
        	$('.menu a:eq(1) span').addClass('selecao')
        }
        if (scroll_top >= 5900) { 
        	$('.menu a').css('font-family','Poppins-Medium')
        	$('.menu a').eq(2).css('font-family','Poppins-Bold')
        $('.menu a span').removeClass('selecao')
        	$('.menu a:eq(2) span').addClass('selecao')
        } 
        if (scroll_top >= 7100) { 
        	$('.menu a').css('font-family','Poppins-Medium')
        	$('.menu a').eq(3).css('font-family','Poppins-Bold')
        	$('.menu a span').removeClass('selecao')
        	$('.menu a:eq(3) span').addClass('selecao')
        } else {

        }   
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });
 
});




//CARROSEIS DE ANIMAÇÃO//
$(function(){
	$(function(){  	
		$('.carrosel').slick({
			dots: false,
			arrows:false,      
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			autoplay: true,	
		});

		$('.carrosel-resultados').slick({
		  centerMode: true,
		  focusOnSelect: true,
		   centerPadding:'0',
		  slidesToShow: 3,
		  dots: false,
		  arrows:true,
		  autoplay: true,	  
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        infinite: true,
		        slidesToShow: 1
		      }
		    }
		  ]
		});
		$('.carrosel-depoimentos').slick({
		  centerMode: true,
		  focusOnSelect: true,
		   centerPadding:'0',
		  slidesToShow: 3,
		  dots: false,
		  arrows:true,
		  autoplay: true,	  
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '0',
		        slidesToShow: 1
		      }
		    }
		  ]
		});
	});  
})

//CARROSEIS DE ANIMAÇÃO MOBILE//
$(function(){
	var x = $(window).width()
	if(x < 480){
		$(function(){ 
			$('.atuacao-itens').slick({
				dots: false,
				arrows:false,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
			$('.motivos').slick({
				dots: false,
				arrows:false,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
		})
	}
})
//ANIMAÇÃO NO BURGER MOBILE//
	$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

//ABRIR E FECHAR MENU MOBILE//
	$(function(){
	var x = $(window).width()
		if(x < 480){
		$('#nav-icon1').click(function(){
			$('.menu').toggleClass('abrir-menu')
		})
		$('.menu a').click(function(){
			$('.menu').removeClass('abrir-menu')
		})
	}
	})



//TROCA DE FORMULÁRIOS//
$(function(){
	$('.formularios h4').eq(1).click(function(){
		$('.solicite').fadeOut(300)
		$('.prefiro').fadeIn(300)
		$(this).removeClass('inativo')
		$(this).addClass('ativo')
		$('.formularios h4').eq(0).removeClass('ativo')
		$('.formularios h4').eq(0).addClass('inativo')
	})
	$('.formularios h4').eq(0).click(function(){
		$('.prefiro').fadeOut(300)
		$('.solicite').fadeIn(300)
		$(this).removeClass('inativo')
		$(this).addClass('ativo')
		$('.formularios h4').eq(1).removeClass('ativo')
		$('.formularios h4').eq(1).addClass('inativo')
	})
})