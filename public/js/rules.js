/*
 *
 *	author: Alan David
 *
 */

$(document).ready(function() {

	function removeHash(){
	    history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
	}

	$('a').click(function(){
		setTimeout(()=>{
	      // call removeHash function after set timeout
	      removeHash();
	    }, 5);
	});


	$('.viagens').mouseover(function(){
		$('.submenu').addClass('active');
		// e.stopPropagation();
	});

	$('header').mouseleave(function(){
	 	$('.submenu').removeClass('active');
	});


	$('.slick').slick({
	  dots: false,
	  infinite: true,
	  speed: 500,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 30000,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 5,
	        slidesToScroll: 3,
	      }
	    },
	    {
	      breakpoint: 900,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: 640,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    }
	  ]
	});

	$('.slick').slick('slickPlay');


	$('.btnForm, .btnFale').click(function(){
		$('#fale').fadeIn()
		setTimeout(function(){
			$('#fale').addClass('active')
		}, 200)/*,
		$('.contentFale').css('left', 'auto');*/
		return false;
	})

	$('.closeFale, .bgFale, .closeMenu, .bgMenu').click(function(){
		setTimeout(function(){
			$('#fale, #menu').css('display', 'none')
		}, 500),
		$('#fale, #menu').removeClass('active')
		return false;
	})

	$('.btnMenu').click(function(){
		$('#menu').css('display', 'block');
		setTimeout(function(){
			$('#menu').addClass('active')
		}, 200)
		return false;
	})



	$('.tel').keyup(function(e){
        v = $(this).val();
        v=v.replace(/\D/g,"")
        v=v.replace(/^(\d\d)(\d)/g,"($1) $2")

        if(v.length > 13){
            v=v.replace(/(\d{5})(\d)/,"$1-$2");
        } else {
            v=v.replace(/(\d{4})(\d)/,"$1-$2");
        }

        $(this).val(v.substring(0, 15));
    }).blur(function(){
        if($(this).val().length < 14){
            $(this).val('');
        }
    }); 


    var form = $( "#formFale" );
    form.validate({ 
        rules: {
            email: { email: true },
        },
        errorContainer: null, errorLabelContainer: $('.msgerro'),
        submitHandler: function(form){
            var $form = $(form);
            var formData = new FormData(form);
			formData.append('nome', $("#nome").val());
			formData.append('email', $("#email").val());
			formData.append('tel', $("#tel").val());
			formData.append('msg', $("#msg").val());
			formData.append('contatoEmail', $("#contatoEmail").val());
			formData.append('contatoCelular', $("#contatoCelular").val());
					
            $( "#fale" ).addClass('loading');

            $.ajax({
                type: "POST",  
                data: formData,
                url: $form.attr('action'),
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){
					if(data.status == 'ok'){
						$('.sucesso').addClass('active')
						alert("Email enviado com sucesso!")
						$( "#fale" ).removeClass('loading');
					} else {
						alert('erro1');
						$( "#fale" ).removeClass('loading');
						//alert(data.info);
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
					console.log(jqXHR, textStatus, errorThrown)
					alert('erro2');
					$( "#fale" ).removeClass('loading');
					//alert(errorThrown);
				}
          	});
        }
    });

});