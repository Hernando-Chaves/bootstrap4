(function(){

	/*SMOOTH SCROLL*/
	document.querySelectorAll('.navbar .nav-link').forEach(enlace =>{
		enlace.addEventListener('click', (e) =>{
			e.preventDefault();

				document.querySelector(enlace.getAttribute('href')).scrollIntoView({
					behavior : 'smooth',
					block    : 'start'
				})
		});
	});


	/*CONTADOR DE FECHA*/
	$('#fecha').countdown('2019/08/02',function(event){
		$(this).html(event.strftime('%D Dias %H Horas %M Minutos %S Segundos'));
	});

/*	CAMBIA COLOR DE BARRA DE NAVEGACIÓ AL DAR SCROLL*/
	window.onscroll = (e) => {
		var scroll = window.scrollY,
		    header = $('#navegacion');

		    if(scroll > 280)
		    {
		    	header.addClass('bg-secundario');
		    } else {
		    	header.removeClass('bg-secundario');
		    }
	}


})()